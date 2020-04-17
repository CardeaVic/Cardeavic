<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

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
    </body>
</html>
