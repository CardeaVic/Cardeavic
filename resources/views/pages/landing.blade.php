@extends('layouts.app')
@push('meta')
    <meta http-equiv="refresh" content="5;url={{env('APP_URL')}}/welcome" />
    @endpush
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.landing.css?".uniqid()) }}">
    @endpush
@section('content')
    <div class="container">
        <div class="row" style="height: 100%; vertical-align: center;">
            <div class="col s12 m12 l12 center-align elementToFadeInAndOut">
                <img class="responsive-img" src="{{ asset('/images/CardeaLogo_final.png') }}">
            </div>
        </div>
    </div>
@endsection
