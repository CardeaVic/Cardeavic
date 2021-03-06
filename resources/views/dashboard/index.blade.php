@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("css/dashboard.css?".uniqid()) }}">
    <style>
        .welcome-msg {
            margin-top: 3%;
            font-size: 16pt;
            line-height: 1.5;
            letter-spacing: 1;
            text-transform: capitalize;
            padding: 10px 10px 10px 10px;
        }
    </style>
@endpush

@section('content')

    <div class="container" style="flex: 1 0 auto;">
        <div class="row">
            {{-- Welcome message --}}
            <div class="card justify-content-center welcome-msg rounded text-center" style="width: 100%; height: 75px">
                Welcome {{ auth() -> user() -> email }}!
            </div>
        </div>
        {{-- This week's status section --}}
        <div class="row" style="margin-top: 3%">
            <p>This week's status</p> <span>
                                    <a data-toggle="tooltip" data-placement="bottom"
                                       title="This section contains the activity and consumption level of the current week from Monday to Sunday">
                                        <i class="fas fa-info-circle p-1"></i>
                                    </a>
                                </span>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4" style="text-align: center">
                        {{-- Activity level chart --}}
                        <div class="card" style="height: 100%;">
                            <div class="card-header">
                                Physical Activity <span>
                                    <a data-toggle="tooltip" data-placement="bottom"
                                       title="Activity level is calculated from required 150 minutes per week.">
                                        <i class="fas fa-info-circle p-1"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="card-body" style="margin-top: 10%">
                                <div class="email-statis-wrap">
                                    <div class="email-round-nock">
                                        <input type="text" class="knob" value="0"
                                               data-rel="{{ $data -> physicalActivityPercentage }}" data-linecap="round"
                                               data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292"
                                               data-thickness=".10" data-readonly="true">
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Activity Level</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="text-align: center">
                        {{-- Smoking chart --}}
                        <div class="card">
                            <div class="card-header">
                                Smoking
                            </div>
                            <div class="card-body">
                                <canvas height="140vh" width="180vw" id="piechart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        {{-- Nutrition chart --}}
                        <div class="card" style=" height: 100%">
                            <div class="card-header">
                                Nutrition <span>
                                    <a data-toggle="tooltip" data-placement="bottom"
                                       title="Consumption level is calculated from required 35 serves per week.">
                                        <i class="fas fa-info-circle p-1"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="card-body" style="margin-top: 10%">
                                <div class="email-statis-wrap">
                                    <div class="email-round-nock">
                                        <input type="text" class="knob" value="0"
                                               data-rel="{{ $data -> nutritionPercentage }}" data-linecap="round"
                                               data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292"
                                               data-thickness=".10" data-readonly="true">
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Consumption Level</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- All time trend section --}}
        <div class="row" style="margin-top: 3%">
            <p>All Time Trends</p><span>
                                    <a data-toggle="tooltip" data-placement="bottom"
                                       title="All time trends are graphed with all the data entered by the user.
                                                The Expected level in each graph are the minimum required values for each day.">
                                        <i class="fas fa-info-circle p-1"></i>
                                    </a>
                                </span>
            <div class="col-md-12">
                <div class="row">
                    {{-- Physical activity chart --}}
                    <div class="col-md-6">
                        <div class="card">
                            <canvas height="140vh" width="180vw" id="physical_activity_chart"></canvas>
                        </div>
                    </div>
                    {{-- Fruit and vegetable chart --}}
                    <div class="col-md-6">
                        <div class="card">
                            <canvas height="140vh" width="180vw" id="fruit_vege_chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
{{--JS Import--}}
@push('js')
    <script src="js/dashboard.js"></script>
    <script src="notika/js/charts/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.5/chartjs-plugin-annotation.js"></script>
    <script src="notika/js/charts/pie-chart.js"></script>
    <script src="notika/js/charts/line-chart.js"></script>
@endpush
