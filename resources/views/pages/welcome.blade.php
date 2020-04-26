@extends('layouts.app')
{{--Import Css--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
@endpush
{{--Main Container--}}
@section('content')
    <div class="w3-container">
        {{-- <div class="w3-row">
            <div class="w3-col s12 m12 l12 z-index-2">
                <button type="button" class="w3-btn w3-medium w3-round w3-right w3-white custom-login" onclick="window.location.href = 'login'">
                    Login
                </button>
            </div>
        </div> --}}
        <div class="w3-row">
            <div class="w3-col s12 m12 l12 z-index-2">
                <a href="login" class="w3-right custom-login">Login</a>
            </div>
        </div>

        {{--  Logo      --}}
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>

        {{--  Welcome Text      --}}
        <div class="w3-row verticle-align-center w3-center z-index-2">
            <div class="w3-col l12 s12 m12 w3-center">
                <p class="single-text-center">Welcome</p>
                <i class="fas fa-hand-holding-heart fa-4x" style="color: white"></i>
                <p class="small-text-center">You are one step away from knowing your heart score!</p>
                <button type="button" class="w3-round custom-button" onclick="window.location.href = 'assessment'">
                    Continue
                </button>
            </div>
        </div>
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
