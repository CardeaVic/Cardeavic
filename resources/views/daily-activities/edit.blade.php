@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endpush

@section('content')
    <div class="container">
        
        <h1>Edit your daily activity</h1>
        {!! Form::open(['action' => ['DailyActivitiesController@update', $daily_activity->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('physical_activity', 'Physical Activity')}}
                {{-- {{Form::text('physical_activity', '', ['class' => 'form-control', 'placeholder' => 'Physical Activity'])}} --}}
                @if ($daily_activity->physical_activity == 1)
                    {{Form::radio('physical_activity', '1', true)}} Yes
                    {{Form::radio('physical_activity', '0')}} No
                @else 
                    {{Form::radio('physical_activity', '1')}} Yes
                    {{Form::radio('physical_activity', '0', true)}} No
                @endif
            </div>
            <div class="form-group">
                {{Form::label('hours', 'Hours')}}
                {{Form::number('hours', $daily_activity->hours)}}
                {{Form::label('minutes', 'Minutes')}}
                {{Form::number('minutes', $daily_activity->minutes)}}
            </div>
            <div class="form-group">
                {{Form::label('fruit_vege', 'Fruits and Vegetables')}}
                @if ($daily_activity->fruit_vege == 1)
                    {{Form::radio('fruit_vege', '1', true)}} Yes
                    {{Form::radio('fruit_vege', '0')}} No
                @else 
                    {{Form::radio('fruit_vege', '1')}} Yes
                    {{Form::radio('fruit_vege', '0', true)}} No
                @endif
            </div>
            <div class="form-group">
                {{Form::label('servings', 'Servings')}}
                {{Form::number('servings', $daily_activity->servings)}}
            </div>
            <div class="form-group">
                {{Form::label('smoke', 'Smoke')}}
                @if ($daily_activity->smoke == 1)
                    {{Form::radio('smoke', '1', true)}} Yes
                    {{Form::radio('smoke', '0')}} No
                @else 
                    {{Form::radio('smoke', '1')}} Yes
                    {{Form::radio('smoke', '0', true)}} No
                @endif
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
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


@endpush