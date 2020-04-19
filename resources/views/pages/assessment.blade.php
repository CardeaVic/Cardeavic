@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <!--Import modern.css-->
    <link href="https://surveyjs.azureedge.net/1.7.2/modern.css" type="text/css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="container wrapper">
        <div class="row custom-logo">
            <div class="col s12 m12 l12">
                <img class="responsive-img" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        <div class="row verticle-align-center form">
            <div class="col l12 s12 m12 center">
                <p class="single-text-center">Heart Health Assessment</p>
                <div id="surveyElement" style="display:inline-block;width:100%;"></div>
                <div id="surveyResult"></div>
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