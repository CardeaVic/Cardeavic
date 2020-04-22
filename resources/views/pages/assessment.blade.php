@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <!--Import modern.css-->
    <link href="https://surveyjs.azureedge.net/1.7.2/modern.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset("/css/survey.css?".uniqid()) }}">
@endpush

@section('content')
    <div class="w3-container wrapper">
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        <div class="w3-row-padding z-index-2">
            <div class="w3-col l12 s12 m12">
                <div id="surveyElement" style="display: inline-block; width: 100%;"></div>
                <form name="surveyForm" method="POST" action="{{ route('assessment.result') }}">
                    @csrf
                    <input id="formData" type="text" name="formData" value="" hidden>
                </form>
            </div>
        </div>
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
@endsection
@push('js')
    <script src="https://surveyjs.azureedge.net/1.7.2/survey.jquery.js"></script>
    <script src="{{ asset('/js/survey.js?'.uniqid()) }}"></script>
@endpush
