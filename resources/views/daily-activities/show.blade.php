@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endpush

@section('content')
    <div class="w3-container">
    <h1>This is your log for date: {{$daily_activity->created_at}}</h1>   
        
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
                <tr>
                    <td>{{$daily_activity->created_at}}</td>
                    <td>{{$daily_activity->physical_activity}}</td>
                    <td>{{$daily_activity->hours}}</td>                        
                    <td>{{$daily_activity->minutes}}</td>
                    <td>{{$daily_activity->fruit_vege}}</td>
                    <td>{{$daily_activity->servings}}</td>
                    <td>{{$daily_activity->smoke}}</td>
                    <td><a href="#" >Edit</td>
                    <td><a href="#" >Delete</td>
                </tr>
        </table>


    </div>
@endsection

@push('js')
    <script src="https://unpkg.com/jquery"></script>
    <script src="https://surveyjs.azureedge.net/1.7.4/survey.jquery.js"></script>
    <script src="https://unpkg.com/moment@2.24.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <script src="{{ asset('/js/logbook.js?'.uniqid()) }}"></script>

@endpush