@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <link rel="stylesheet" href="{{ asset("/css/cd.about.css?".uniqid()) }}">
@endpush
@section('content')
    {{-- Main Container   --}}
    <div class="w3-container">
        {{-- Custom Logo Starts       --}}
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        {{-- Custom Logo Ends       --}}
        {{-- About Cardea Text Starts       --}}
        <div class="w3-row verticle-align-center w3-center z-index-2">
            <div class="w3-col l12 s12 m12 w3-center">
                <p class="single-text-center">Your result can Improve</p>
                <p class="small-text-center">We at "CARDEA" provide daily Log book for recording your lifestyle
                    habits</p>
                <p class="small-text-center">Logging your daily life style habits will generate you a personalised
                    health report about your Cardiovascular Health</p>
                <p class="small-text-center">Logbook primarily focuses on your "Eating", "Physical" and "Smoking"
                    Habits</p>
                <p class="small-text-center">Logbook will have a personalised dashboard for tracking ups and downs in
                    your habits</p>
                <button type="button" class="w3-round custom-button-login" onclick="window.location.href = 'login'">
                    Login
                </button>
                <button type="button" class="w3-round custom-button-signup" onclick="window.location.href = 'register'">
                    Register me
                </button>
            </div>
        </div>
        {{-- About Cardea Text Ends       --}}
        {{-- Background Bubbles       --}}
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
