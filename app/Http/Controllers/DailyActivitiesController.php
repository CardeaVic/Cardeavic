<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyActivity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Validator;

class DailyActivitiesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $daily_activities = DailyActivity::where('user_id', $user_id)->orderBy('date', 'desc')->paginate(10);
        return view('daily-activities.index')->with('daily_activities', $daily_activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return create view
        return view('daily-activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['date'] = Carbon::createFromFormat('d/m/Y', $request['date']) -> toDateString();
        // Validate the input
        $validator = Validator::make($request->all(),[
            'physical_activity' => 'required',
            'hours' => 'nullable|integer|between:0,24',
            'minutes' => 'nullable|integer|between:0,60',
            'fruits_veges' => 'required',
            'fruit_vege' => 'nullable|integer|between:0,20',
            'smoking' => 'required',
            'date' => 'required|unique:daily_activities,date,NULL,id,user_id,'. auth() -> user() -> id,
        ]);

        if ($validator->fails()){
            return redirect('daily-activities/create')->withErrors($validator)->withInput();
        }
        //https://laracasts.com/discuss/channels/laravel/unique-validation-depend-on-the-user-id?page=1



        // Create new object and assign their values from form input
        $daily_activity = new DailyActivity;
        $daily_activity->user_id = auth()->user()->id;
        $daily_activity->physical_activity = $request->input('physical_activity');
        if($request->input('physical_activity') == 0){
            $daily_activity->hours = 0;
            $daily_activity->minutes = 0;
        }else{
            $daily_activity->hours = $request->input('hours');
            $daily_activity->minutes = $request->input('minutes');
        }
        $daily_activity->fruit_vege = $request->input('fruits_veges');
        if($request->input('fruits_veges') == 0){
            $daily_activity->servings = 0;
        }else{
            $daily_activity->servings = $request->input('fruit_vege');
        }
        $daily_activity->smoke = $request->input('smoking');
        $date = str_replace("/","-",$request->input('date'));
        $daily_activity->date = Carbon::parse($date)->format('Y-m-d');
        // Save the record in database
        $daily_activity->save();

        return redirect('daily-activities')->with('success', 'Activity added');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return show view
        $daily_activity =  DailyActivity::find($id);
        return view('daily-activities.show')->with('daily_activity', $daily_activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find activity based on id
        $daily_activity =  DailyActivity::find($id);
        // Check for correct user
        if(auth()->user()->id !== $daily_activity->user_id){
            return redirect('home')->with('error', 'Unauthorized Page');
        }
        return view('daily-activities.edit')->with('daily_activity', $daily_activity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate input
        $this->validate($request,[
            'physical_activity' => 'required',
            'hours' => 'nullable|integer|between:0,24',
            'minutes' => 'nullable|integer|between:0,60',
            'fruits_veges' => 'required',
            'fruit_vege' => 'nullable|integer|between:0,20',
            'smoking' => 'required'
        ]);

        // Update the record based on the id
        $daily_activity = DailyActivity::find($id);
        $daily_activity->physical_activity = $request->input('physical_activity');
        if($request->input('physical_activity') == 0){
            $daily_activity->hours = 0;
            $daily_activity->minutes = 0;
        }else{
            $daily_activity->hours = $request->input('hours');
            $daily_activity->minutes = $request->input('minutes');
        }
        $daily_activity->fruit_vege = $request->input('fruits_veges');
        if($request->input('fruits_veges') == 0){
            $daily_activity->servings = 0;
        }else{
            $daily_activity->servings = $request->input('fruit_vege');
        }
        $daily_activity->smoke = $request->input('smoking');
        // Save the record in database
        $daily_activity->save();

        return redirect('daily-activities')->with('success', 'Activity updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find record based on id
        $daily_activity = DailyActivity::find($id);
        // Check for correct user
        if(auth()->user()->id !== $daily_activity->user_id){
            return redirect('daily-activities')->with('error', 'Unauthorized Page');
        }
        // delete the record in database
        $daily_activity->delete();
        return redirect('daily-activities')->with('success', 'Activity removed');
    }

    public function export(){


        $userId = auth() -> user() -> id;
        $dailyActivities = DailyActivity::where('user_id', $userId) -> orderBy('date', 'asc') -> get();
        $dailyActivitiesModified = $dailyActivities->transform(function ($dailyActivity) {
            $dailyActivity -> date = $dailyActivity -> date;
            $dailyActivity -> smoke = $dailyActivity -> smoke == 0 ? "No" : "Yes";
            return $dailyActivity;
        });
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=file.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
        $columns = array('Date', 'Activity Hour', 'Activity Minute', 'Food Servings', 'Smoked');

        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($dailyActivitiesModified as $dailyActivity) {
            fputcsv($file, array($dailyActivity->date -> toDateString(),$dailyActivity->hours,$dailyActivity->minutes,$dailyActivity->servings,$dailyActivity->smoke));
        }
        exit();
    }
}
