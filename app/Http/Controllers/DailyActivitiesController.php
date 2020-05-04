<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyActivity;

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
        $daily_activities = DailyActivity::orderBy('created_at', 'desc')->paginate(10);

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
        // Validate the input
        $this->validate($request,[
            'physical_activity' => 'required',
            'hours' => 'nullable|integer|between:0,24',
            'minutes' => 'nullable|integer|between:0,60',
            'fruit_vege' => 'required',
            'servings' => 'nullable|integer|between:0,99',
            'smoke' => 'required',
            'date' => 'required|unique:daily_activities,date,NULL,id,user_id,'.\Auth::id()
        ]);
        
        // Create new object and assign their values from form input
        $daily_activity = new DailyActivity;
        $daily_activity->user_id = auth()->user()->id;
        $daily_activity->date = $request->input('date');
        $daily_activity->physical_activity = $request->input('physical_activity');
        $daily_activity->hours = $request->input('hours');
        $daily_activity->minutes = $request->input('minutes');
        $daily_activity->fruit_vege = $request->input('fruit_vege');
        $daily_activity->servings = $request->input('servings');
        $daily_activity->smoke = $request->input('smoke');
        // Save the record in database
        $daily_activity->save();

        return redirect('home')->with('success', 'Activity added');

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
            'fruit_vege' => 'required',
            'servings' => 'nullable|integer|between:0,99',
            'smoke' => 'required',
            'date' => 'required|unique:daily_activities,date,NULL,id,user_id,'.\Auth::id()
        ]);
        
        // Update the record based on the id
        $daily_activity = DailyActivity::find($id);
        $daily_activity->physical_activity = $request->input('physical_activity');
        $daily_activity->hours = $request->input('hours');
        $daily_activity->minutes = $request->input('minutes');
        $daily_activity->fruit_vege = $request->input('fruit_vege');
        $daily_activity->servings = $request->input('servings');
        $daily_activity->smoke = $request->input('smoke');
        // Save the record in database
        $daily_activity->save();

        return redirect('home')->with('success', 'Activity updated');
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
            return redirect('home')->with('error', 'Unauthorized Page');
        }
        // delete the record in database
        $daily_activity->delete();
        return redirect('home')->with('success', 'Activity removed');
    }
}
