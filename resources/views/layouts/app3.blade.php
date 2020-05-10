<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>{{config('app.name', 'Cardea')}}</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
@stack('meta')

<!-- Import Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!--Import w3css.css-->
    <link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset("/css/cd.common.css?".uniqid()) }}">
    <link rel="stylesheet" href="{{ asset("/css/navbar.css?".uniqid()) }}">

        <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/notika/bootstrap.min.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/notika/normalize.css">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/notika/waves.min.css">
    <link rel="stylesheet" href="/css/notika/button.css">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/notika/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/notika/style.css">
    @stack('css')


</head>

<body>
    {{--    Including the Navbar --}}
    @include('include.navbar')
    <div class="w3-container">
        @include('include.messages')
        @yield('content')
    </div>

<!--JavaScript at end of body for optimized loading-->

<!-- Import SurveyJs required js -->
<script src="https://unpkg.com/jquery"></script>

{{-- Navbar Hamburger --}}
<script>
    function myFunction() {
        var x = document.getElementById("hamburgerbtn");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

    <!-- jquery
		============================================ -->
        <script src="/js/notika/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
        <script src="/js/notika/bootstrap.min.js"></script>
    <!--  wave JS
		============================================ -->
        {{-- <script src="/js/notika/waves.min.js"></script>
        <script src="/js/notika/wave-active.js"></script> --}}
    <!-- main JS
	    ============================================ -->
        <script src="/js/notika/main.js"></script>
        
@stack('js')
</body>
</html>
