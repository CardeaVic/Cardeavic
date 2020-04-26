@extends('layouts.app')
{{--Import Css--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <link rel="stylesheet" href="{{ asset("/css/cd.result.css?".uniqid()) }}">
@endpush
@section('content')
    <div class="w3-container">
        {{--    Logo    --}}
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        {{-- Card row       --}}
        <div class="w3-row verticle-align-center w3-center z-index-2 scene margin-custom">
            <div class="w3-col s12 m8 l8 card" id="card">
                {{--   card front             --}}
                <div class="w3-card w3-white w3-round w3-hover-shadow card__face card__face--front">
                    <header class="w3-container">
                        <h1>Your result is ready!</h1>
                    </header>
                    <div class="w3-container">
                        <p>The result is a machine generated probability of not having a heart stroke given the current
                            parameters.</p>
                        <span class="disclaimer">
                            <i class="fas fa-exclamation-triangle fa-4x"></i>
                        </span>
                    </div>
                    <br><br>
                    <div class="w3-container">
                        <button id="front-button" class="custom-button-result">Agree</button>
                    </div>
                </div>

                <!-- Card Face Back -->
                <div class="w3-card w3-white w3-round w3-hover-shadow card__face card__face--back">
                    <header class="w3-container w3-center">
                        <h2>Congratulations</h2>
                    </header>
                    <div class="w3-container w3-center custom-text-color">
                        There is
                        <p class="result-score">
                            {{ $response }}%
                        </p>
                        probability that you won't get a heart stroke in near future.
                    </div>
                    <br><br>
                    <div class="w3-container">
                        <button onclick="window.location.href = '{{ route('about-cardea') }}'"
                                class="custom-button-whats-next">What's Next
                        </button>
                    </div>
                </div>
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
    {{-- Js to flip card in button click   --}}
    <script>
        var card = document.querySelector('.card');
        var button = document.getElementById('front-button')
        button.addEventListener('click', function () {
            card.classList.toggle('is-flipped');
        });
    </script>
@endsection
