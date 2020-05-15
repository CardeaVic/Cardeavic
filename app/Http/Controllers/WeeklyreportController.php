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
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $userId = auth() -> user() -> id;
        $startDate = DailyActivity::where('user_id', $userId) -> orderBy('date', 'asc') -> first() -> date -> toDateString();
        $endDate = Carbon::today() -> toDateString();
        $dates = CarbonPeriod::create($startDate, $endDate);
        $sundaysWeeks = array();
        foreach ($dates as $date){
            if($date -> dayOfWeek == 0){
                $insideArray = array();
                $weekStartDate = $date -> copy() -> subDay(6);
                $weekEndDate = $date;
                array_push($sundaysWeeks, ['weekStartDate' => $weekStartDate, 'weekEndDate' => $weekEndDate]);
            }
        }
        return view('report.index', compact('sundaysWeeks'));
    }

    public function viewReport(Request $request){
        $input = $request -> all();
        $startDate = Carbon::parse($input['startDate']) -> format('d/m');
        $endDate = Carbon::parse($input['endDate']) -> format('d/m');;
        $userId = auth() -> user() -> id;
        $user = auth() -> user() -> email;
        $dailyActivities = DailyActivity::where('user_id', $userId) -> whereBetween('date', [$input['startDate'], $input['endDate']])->get();
        $weeklyTotalMinutes = 0;
        $numberOfServings = 0;
        $daysSmoked = 0;
        foreach ($dailyActivities as $dailyActivity) {
            $totalMinutes = ($dailyActivity -> hours)*60 + ($dailyActivity -> minutes);
            $weeklyTotalMinutes = $weeklyTotalMinutes + $totalMinutes;
            $totalServings = $dailyActivity -> servings;
            if ($dailyActivity -> servings != 0){
                $numberOfServings = $numberOfServings + $totalServings;
            }
            if($dailyActivity -> smoke != 0){
                $daysSmoked = $daysSmoked + 1;
            }
        }

        $pdf = PDF::loadView('report.pdf.index', compact('user', 'startDate', 'endDate', 'numberOfServings', 'weeklyTotalMinutes', 'daysSmoked'));
        $pdf -> setOptions(['dpi' => 150]);
        $pdf -> setPaper('a4', 'portriat');
        return $pdf -> stream();
    }

    public function redirectViewPage(){
        return redirect(route('report.index'));
    }


}
