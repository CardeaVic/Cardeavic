@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')
    <div class="w3-container">
        {{-- <h1>Your daily log</h1>   
        <div class="w3-responsive">
            @if(count($daily_activities) > 0)
            <table class="w3-table w3-table-all w3-centered w3-card-4">
                <tr class="w3-teal">
                    <th>Date</th>
                    <th>Physical Activity</th>
                    <th>Hours</th>
                    <th>Minutes</th>
                    <th>Fruits and Vegetables</th>
                    <th>Servings</th>
                    <th>Smoke</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($daily_activities as $daily_activity)
                    <tr>
                        <td>{{$daily_activity->date}}</td>
                        <td>{{$daily_activity->physical_activity}}</td>
                        <td>{{$daily_activity->hours}}
                            @if($daily_activity->hours == '') - @endif</td>
                        <td>{{$daily_activity->minutes}} 
                            @if($daily_activity->minutes == '') - @endif</td>
                        <td>{{$daily_activity->fruit_vege}}</td>
                        <td>{{$daily_activity->servings}}
                            @if($daily_activity->servings == '') - @endif</td>
                        <td>{{$daily_activity->smoke}}</td>
                        <td><a href="/daily-activities/{{$daily_activity->id}}/edit" class="btn btn-link">Edit</td>
                        <td>{!! Form::open(['action' => ['DailyActivitiesController@destroy', $daily_activity->id], 'method' => 'POST']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-link'])}}
                            {!! Form::close() !!}
                    </tr>
                @endforeach
            </table> 
            @else
                <p>No activites found</p>
            @endif
        </div> --}}

        @if(count($daily_activities) > 0)
            <div class="data-table-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="data-table-list">
                                <div class="basic-tb-hd">
                                    <h1 class="w3-center">Your daily log</h1>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-striped w3-centered">
                                        <thead>
                                            <tr class="custom-table-header nk-white">
                                                <th class="w3-text-white" style="font-size: 18px;">Date</th>
                                                <th colspan="2" class="w3-text-white" style="font-size: 18px;">Physical Activity</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Fruit and Vegetables</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Smoke</th>
                                                
                                                <th></th>
                                                <th style="padding: 0"><a href="/daily-activities/create" class="button">
                                                    <span class="material-icons" style="font-size:42px; color:white">
                                                    add_circle_outline
                                                    </span></a></th>
                                            </tr>
                                            <tr class="custom-table-header nk-white" >
                                                <th></th>
                                                <th class="w3-text-white" style="font-size: 18px;">Hours</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Minutes</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($daily_activities as $daily_activity)
                                                <tr>
                                                    <td>{{$daily_activity->date}}</td>
                                                    <td>{{$daily_activity->hours}}
                                                        @if($daily_activity->hours == '') 0 @endif</td>
                                                    <td>{{$daily_activity->minutes}} 
                                                        @if($daily_activity->minutes == '') 0 @endif</td>
                                                    <td>{{$daily_activity->servings}}
                                                        @if($daily_activity->servings == '') 0 @endif</td>
                                                    <td>@if($daily_activity->smoke == '1') Yes
                                                        @else No
                                                        @endif
                                                    </td>
                                                    <td><a href="/daily-activities/{{$daily_activity->id}}/edit" class="btn btn-info notika-btn-info waves-effect">Edit</td>
                                                    <td>{!! Form::open(['action' => ['DailyActivitiesController@destroy', $daily_activity->id], 'method' => 'POST']) !!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete', ['class' => 'btn btn-danger notika-btn-danger waves-effect'])}}
                                                        {!! Form::close() !!}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $daily_activities->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p>No activites found - Add one</p>
            <a href="/daily-activities/create" class="button">
                <span class="material-icons" style="font-size:42px;">
                add_circle_outline
                </span></a>
        @endif

    </div>
@endsection

@push('js')
    <script src="https://unpkg.com/jquery"></script>
    <script src="https://surveyjs.azureedge.net/1.7.4/survey.jquery.js"></script>
    <script src="https://unpkg.com/moment@2.24.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/logbook.js?'.uniqid()) }}"></script>

@endpush