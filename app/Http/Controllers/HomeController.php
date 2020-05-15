<?php

namespace App\Http\Controllers;

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
        $daily_activities = DailyActivity::where('user_id', $user_id)->orderBy('date', 'desc')->take(7)->get();
        // Passing data to javascript
        JavaScript::put([
            'records' => $daily_activities,
        ]);

        return view('dashboard.index');
    }
}
