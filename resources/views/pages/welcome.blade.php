@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
@endpush
@section('content')
    <div class="container wrapper">
        <div class="row custom-logo">
            <div class="col s12 m12 l12">
                <img class="responsive-img" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        <div class="row verticle-align-center">
            <div class="col l12 s12 m12 center">
                <p class="single-text-center">Welcome</p>
                <i class="fas fa-hand-holding-heart fa-4x" style="color: white"></i>
                <p class="small-text-center">You are one step away from knowing your heart score!</p>
                <button class="custom-button">Continue to Assessment</button>
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
