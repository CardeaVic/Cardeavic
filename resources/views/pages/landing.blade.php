@extends('layouts.app')
@push('meta')
    <meta http-equiv="refresh" content="5;url=/welcome" />
    @endpush
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.landing.css?".uniqid()) }}">
    @endpush
@section('content')
    <div class="w3-container">
        <div class="w3-row" style="height: 100%; vertical-align: center;">
            <div class="w3-col s12 m12 l12 w3-center elementToFadeInAndOut">
                <img class="w3-image" width="600px" height="600px" src="{{ asset('/images/CardeaLogo_final.png') }}">
            </div>
        </div>
    </div>
@endsection
