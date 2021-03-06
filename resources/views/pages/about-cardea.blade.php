@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <link rel="stylesheet" href="{{ asset("/css/cd.about.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
        <p class="single-text-center text-center" style="font-weight: normal !important">Cardea has more to offer!</p>
        {{-- Carousel container starts --}}
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div id="carouselCaptions" class="carousel slide z-index-2" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                  </ol>
                  {{-- Carousel images section starts --}}
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/images/carousel/carousel1.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(77, 77, 77, 0.5)">
                        <p>Personalized <strong>DASHBOARD</strong> for tracking the trends in daily habits.
                        </p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="/images/carousel/carousel2.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(77, 77, 77, 0.5)">
                        <p><strong>LOG BOOK</strong> records lifestyle habits primarily focuses on eating habits, physical activity and smoking status.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="/images/carousel/carousel3.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(77, 77, 77, 0.5)">
                        <p>Generate personalized <strong>REPORTS</strong> about Cardiovascular Health.</p>
                      </div>
                    </div>
                  </div>
                  {{-- Carousel images section ends--}}

                  {{-- Carousel navigation buttons --}}
                  <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev" style="background-image: linear-gradient(to right, rgba(77,77,77,1), rgba(77,77,77,0));">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next" style="background-image: linear-gradient(to right, rgba(77,77,77,0), rgba(77,77,77,1));">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
          </div>
        </div>
      </div>
      {{-- Carousel container ends --}}
        <div class="w3-row verticle-align-center w3-center z-index-2" style="margin-top: 32px">
            <div class="w3-col l12 s12 m12 w3-center">
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

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endpush