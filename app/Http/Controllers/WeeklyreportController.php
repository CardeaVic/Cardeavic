<?php

namespace App\Http\Controllers;

use App\DailyActivity;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use PDF;


class WeeklyreportController extends Controller
{
    /**
     * Create a new controller instance.
     * Middleware to check if the user has autheticated or not
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

//    Method to generate the index of the report page
    public function index()
    {
//        Getting user id
        $userId = auth()->user()->id;
//        Fetching the activity from the database
        $firstActivity = DailyActivity::where('user_id', $userId)->orderBy('date', 'asc')->first();
        $sundaysWeeks = array();
        //Populating all the sundays from the database
        if (!empty($firstActivity)) {
            $startDate = $firstActivity->date->toDateString();
            $endDate = Carbon::today()->toDateString();
            $dates = CarbonPeriod::create($startDate, $endDate);
//            Looping through all the dates in the array
            foreach ($dates as $date) {
                if ($date->dayOfWeek == 0) {
                    $insideArray = array();
                    $weekStartDate = $date->copy()->subDay(6);
                    $weekEndDate = $date;
                    array_push($sundaysWeeks, ['weekStartDate' => $weekStartDate, 'weekEndDate' => $weekEndDate]);
                }
            }
        }
//        Returning the report dashboard
        return view('report.index', compact('sundaysWeeks'));
    }

//    Method for generating report for each week
//Take from date to date as the argument
    public function viewReport(Request $request)
    {
//        Requesting all the inputs from the form
        $input = $request->all();
        $startDate = Carbon::parse($input['startDate'])->format('d/m');
        $endDate = Carbon::parse($input['endDate'])->format('d/m');;
        $userId = auth()->user()->id;
        $user = auth()->user()->email;
        $dailyActivities = DailyActivity::where('user_id', $userId)->whereBetween('date', [$input['startDate'], $input['endDate']])->get();
        $weeklyTotalMinutes = 0;
        $numberOfServings = 0;
        $daysSmoked = 0;

//        Iterating over the data to calculate the Parameters
        foreach ($dailyActivities as $dailyActivity) {
            $totalMinutes = ($dailyActivity->hours) * 60 + ($dailyActivity->minutes);
            $weeklyTotalMinutes = $weeklyTotalMinutes + $totalMinutes;
            $totalServings = $dailyActivity->servings;
            if ($dailyActivity->servings != 0) {
                $numberOfServings = $numberOfServings + $totalServings;
            }
            if ($dailyActivity->smoke != 0) {
                $daysSmoked = $daysSmoked + 1;
            }
        }
//        Loading the PDF Views
        $pdf = PDF::loadView('report.pdf.index', compact('user', 'startDate', 'endDate', 'numberOfServings', 'weeklyTotalMinutes', 'daysSmoked'));
        $pdf->setOptions(['dpi' => 150]);
        $pdf->setPaper('a4', 'portriat');
        return $pdf->stream();
    }

    public function redirectViewPage()
    {
//        Redirecting the get rout of view report page
        return redirect(route('report.index'));
    }


}
