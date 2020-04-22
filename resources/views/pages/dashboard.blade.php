@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
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
                <div>Dashboard</div>
                
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
