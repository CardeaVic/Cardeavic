@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
@endpush
@section('content')
    <div class="w3-container">
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        <div class="w3-row verticle-align-center w3-center z-index-2">
            <div class="w3-col l12 s12 m12 w3-center">
                <p class="single-text-center">Welcome</p>
                <i class="fas fa-hand-holding-heart fa-4x" style="color: white"></i>
                <p class="small-text-center">You are one step away from knowing your heart score!</p>
                <button type="button" class="w3-round custom-button" onclick= "window.location.href = 'assessment'">Continue</button>
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
