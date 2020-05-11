@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("css/dashboard.css?".uniqid()) }}">
@endpush

@section('content')
    {{-- Main Container for Dashboard--}}
    <div class="container">
        <div class="area-chart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: auto; margin-right: auto;">
                        <div class="area-chart-wp">
                            <canvas height="140vh" width="180vw" id="piechart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-chart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="line-chart-wp chart-display-nn">
                            <canvas height="140vh" width="180vw" id="physical_activity_chart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="line-chart-wp sm-res-mg-t-30 chart-display-nn">
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
    <script src="js/dashboard.js"></script>
    <script src="notika/js/charts/Chart.js"></script>
    <script src="notika/js/charts/pie-chart.js"></script>
    <script src="notika/js/charts/line-chart.js"></script>
@endpush
