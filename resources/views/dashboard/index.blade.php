@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/dashboard.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')
    {{-- Main Container for Dashboard--}}
    <div class="w3-container">

        {{-- Pie chart --}}
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: auto; margin-right: auto;">
                        <div>
                            <canvas height="140vh" width="180vw" id="piechart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Line charts --}}
        <div class="line-chart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="line-chart-wp chart-display-nn">
                            {{-- Physical Activity Chart --}}
                            <canvas height="140vh" width="180vw" id="physical_activity_chart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="line-chart-wp chart-display-nn">
                            {{-- Servings Chart --}}
                            <canvas height="140vh" width="180vw" id="fruit_vege_chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Main Container Ends   --}}
@endsection
{{--JS Import--}}
@push('js')
    <script src="{{ asset('/js/dashboard.js?'.uniqid()) }}"></script>
@endpush
