<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\DailyActivity;
use JavaScript;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // Get user id
        $user_id = auth()->user()->id;
        // Fetching records from db
        $daily_activities = DailyActivity::where('user_id', $user_id)->orderBy('date', 'asc')->get();
        // Passing data to javascript
        JavaScript::put([
            'records' => $daily_activities,
        ]);

        // Weekly Status
        $today = Carbon::today();
        $startDate = $today -> startOfWeek() -> format('y-m-d');
        $endDate = $today -> endOfWeek() -> format('y-m-d');
        $dailyActivities = DailyActivity::where('user_id', $user_id) -> whereBetween('date', [$startDate, $endDate]) -> get();
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

        $physicalActivityPercentage = round(($weeklyTotalMinutes/150) * 100, 0);
        $nutritionPercentage = round(($numberOfServings/35) * 100, 0);

        $data = new \stdClass();
        $data -> physicalActivityPercentage = $physicalActivityPercentage;
        $data -> nutritionPercentage = $nutritionPercentage;
        $data -> daysSmoked = $daysSmoked;
        return view('dashboard.index', compact('weeklyTotalMinutes', 'numberOfServings', 'daysSmoked', 'data'));
    }
}
