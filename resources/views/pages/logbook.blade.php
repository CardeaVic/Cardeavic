@extends('layouts.app')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" type="text/css" rel="stylesheet"/>

@endpush

@section('content')
    {{--    Including the Navbar --}}
    @include('include.navbar')
    <div class="container">
        <h1 class="w3-center">Enter your daily log</h1>

        <div class="nk-int-st">
            <input type="text" class="form-control" placeholder="Contact Number">
            </div>
    </div>
@endsection

@push('js')
    <script src="https://unpkg.com/jquery"></script>
    <script src="https://surveyjs.azureedge.net/1.7.4/survey.jquery.js"></script>
    <script src="https://unpkg.com/moment@2.24.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <script src="{{ asset('/js/logbook.js?'.uniqid()) }}"></script>

@endpush
