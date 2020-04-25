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
                <input class="w3-input w3-border-0 w3-round custom-button" placeholder="Password" type="text" id="pw" name="password" style="margin: auto;margin-bottom: 20px;">
                <button type="button" class="w3-round custom-button" onclick="checkPass()">Continue</button>
                <p id="errorMsg" style="color:red; visibility:hidden"></p>
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
    <script>
        function checkPass(){
            usrIn = document.getElementById("pw").value;
            if(usrIn != "123456") {
                document.getElementById("pw").value = "";
                document.getElementById("errorMsg").innerHTML = "Invalid input";
                document.getElementById("errorMsg").style.visibility = "visible";
                return false;
            }else{
                window.location.href = "assessment";
                return true;
            }
        }

    </script>
@endsection
