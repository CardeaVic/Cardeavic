<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

        <title>{{config('app.name', 'Cardea')}}</title>
        
    </head>
    <body>
        @include('include.navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('include.footer')

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>

        <script>
        setTimeout(function() {
            //After 5000 milliseconds, fade out the overlay. The animation duration is 500 ms.
          $(".overlay").fadeOut(500);
        }, 5000);</script>

        {{-- https://stackoverflow.com/questions/35427641/how-to-dynamically-set-the-active-class-in-bootstrap-navbar --}}
        <script type="text/javascript">
            $(document).ready(function () {
                var url = window.location;
                $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
                $('ul.nav a').filter(function() {
                     return this.href == url;
                }).parent().addClass('active');
            });
        </script> 
    </body>
</html>
