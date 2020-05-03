<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyActivity;

class DailyActivitiesController extends Controller
{
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
        //
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
        //
        $this->validate($request,[
            'physical_activity' => 'required',
            'fruit_vege' => 'required',
            'smoke' => 'required'
        ]);
        
        $daily_activity = new DailyActivity;
        $daily_activity->physical_activity = $request->input('physical_activity');
        $daily_activity->hours = $request->input('hours');
        $daily_activity->minutes = $request->input('minutes');
        $daily_activity->fruit_vege = $request->input('fruit_vege');
        $daily_activity->servings = $request->input('servings');
        $daily_activity->smoke = $request->input('smoke');
        $daily_activity->user_id = 1;
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
        //
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
        //
        $daily_activity =  DailyActivity::find($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $daily_activity = DailyActivity::find($id);
        $daily_activity->delete();
        return redirect('daily-activities')->with('success', 'Activity removed');
    }
}
