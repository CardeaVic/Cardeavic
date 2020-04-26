@extends('layouts.app')
@section('content')
    <div class="w3-container">
        <p class="w3-center" style="margin-top: 100px;">
            Please enter password to continue viewing the application
        </p>
        {{-- Password --}}
        <div class="w3-row verticle-align-center w3-center" style="margin:auto; width: 100px; height: 100px;">
            <div class="w3-col l12 s12 m12 w3-center">
                {{-- Input --}}
                <input class="w3-input w3-border w3-round" placeholder="Password" type="text" id="pw" name="password"
                       style="margin: auto;margin-bottom: 20px;">
                <button type="button" class="w3-button w3-block w3-blue" onclick="checkPass()">Continue</button>
                <p id="errorMsg" style="color:red; visibility:hidden"></p>
            </div>
        </div>
    </div>
    <script>
        // Password check
        function checkPass() {
            usrIn = document.getElementById("pw").value;
            if (usrIn != "123456") {
                document.getElementById("pw").value = "";
                document.getElementById("errorMsg").innerHTML = "Invalid password!";
                document.getElementById("errorMsg").style.visibility = "visible";
                return false;
            } else {
                window.location.href = "landing";
                return true;
            }
        }

    </script>
@endsection