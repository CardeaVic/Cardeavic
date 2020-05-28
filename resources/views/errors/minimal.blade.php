<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>404 Page | Cardea</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ public_path('notika/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ public_path('notika/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/wave/waves.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/notika-custom-icon.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ public_path('notika/css/responsive.css') }}">
    <style>
        body{
            background: #50a3a2;
            background: -webkit-gradient(linear, left top, right bottom, from(#50a3a2), to(#53e3a6));
            background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%) fixed;
        }
    </style>
{{--    <link rel="stylesheet" href="css/w3.css">--}}
{{--    <link rel="stylesheet" href="css/cd.common.css">--}}
{{--    <link rel="stylesheet" href="css/cd.welcome.css">--}}
    <!-- modernizr JS
		============================================ -->
    <script src="{{ public_path('notika/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
<div class="w3-row custom-logo">
    <div class="w3-col s12 m12 l12">
        <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
    </div>
</div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- 404 Page area Start-->
<div class="error-page-area">
    {{--Logo --}}
    <div class="error-page-wrap z-index-2">
        <i class="notika-icon notika-close"></i>
        <h2>ERROR <span class="counter">@yield('code')</span></h2>
        <p> @yield('message')</p>
        <a href="{{ route('landing') }}" class="btn">Home</a>
        <a href="{{ route('home') }}" class="btn error-btn-mg">Login</a>
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
<!-- 404 Page area End-->
<!-- jquery
    ============================================ -->
<script src="{{ public_path('notika/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{ public_path('notika/js/bootstrap.min.js') }}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{ public_path('notika/js/wow.min.js') }}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{ public_path('notika/js/jquery-price-slider.js') }}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{ public_path('notika/js/owl.carousel.min.js') }}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{ public_path('notika/js/jquery.scrollUp.min.js') }}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{ public_path('notika/js/meanmenu/jquery.meanmenu.js') }}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{ public_path('notika/js/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ public_path('notika/js/counterup/waypoints.min.js') }}"></script>
<script src="{{ public_path('notika/js/counterup/counterup-active.js') }}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{ public_path('notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{ public_path('notika/js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ public_path('notika/js/sparkline/sparkline-active.js') }}"></script>
<!-- flot JS
    ============================================ -->
<script src="{{ public_path('notika/js/flot/jquery.flot.js') }}"></script>
<script src="{{ public_path('notika/js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ public_path('notika/js/flot/flot-active.js') }}"></script>
<!-- knob JS
    ============================================ -->
<script src="{{ public_path('notika/js/knob/jquery.knob.js') }}"></script>
<script src="{{ public_path('notika/js/knob/jquery.appear.js') }}"></script>
<script src="{{ public_path('notika/js/knob/knob-active.js') }}"></script>
<!--  wave JS
    ============================================ -->
<script src="{{ public_path('notika/js/wave/waves.min.js') }}"></script>
<script src="{{ public_path('notika/js/wave/wave-active.js') }}"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{ public_path('notika/js/chat/jquery.chat.js') }}"></script>
<!--  todo JS
    ============================================ -->
<script src="{{ public_path('notika/js/todo/jquery.todo.js') }}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{ public_path('notika/js/plugins.js') }}"></script>
<!-- main JS
    ============================================ -->
<script src="{{ public_path('notika/js/main.js') }}"></script>
</body>
</html>
