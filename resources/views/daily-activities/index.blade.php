@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')
    <div class="w3-container">
        <h1>Your daily log</h1>   
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
                    <tr>
                    </tr>
                @endforeach
            </table> 
            @else
                <p>No activites found</p>
            @endif
        </div>
        {{-- {{$daily_activities->links()}} --}}
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