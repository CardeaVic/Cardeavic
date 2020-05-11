@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
@endpush

@section('content')
    {{-- Main Container for create --}}
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{-- Form opens --}}
            {!! Form::open(['action' => 'DailyActivitiesController@store', 'method' => 'POST']) !!}
            <div class="form-element-list mg-t-30">
                <h1>Add your daily activity</h1><br />
                <div class="row">
                    {{-- Physical activity radio button --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                {{Form::label('physical_activity', 'Physical Activity')}}<br />
                                {{Form::radio('physical_activity', '1')}} Yes
                                {{Form::radio('physical_activity', '0', true)}} No
                            </div>
                        </div>
                    </div>
                    {{-- Hours and minutes input --}}
                    <div id="physical_hidden" hidden>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    {{Form::number('hours', '',['class' => 'form-control', 'placeholder' => 'Hours'])}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    {{Form::number('minutes', '',['class' => 'form-control', 'placeholder' => 'Minutes'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fruit and vegetables radio button --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <br />
                                {{Form::label('fruit_vege', 'Fruits and Vegetables')}}<br />
                                {{Form::radio('fruit_vege', '1')}} Yes
                                {{Form::radio('fruit_vege', '0', true)}} No
                            </div>
                        </div>
                    </div>
                    {{-- Servings input --}}
                    <div id="servings_hidden" hidden>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    {{Form::number('servings', '',['class' => 'form-control', 'placeholder' => 'Servings'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Smoke radio button --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <br />
                                {{Form::label('smoke', 'Smoke')}}<br />
                                {{Form::radio('smoke', '1')}} Yes
                                {{Form::radio('smoke', '0', true)}} No
                            </div>
                        </div>
                    </div>
                    {{-- Date input --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <br />
                                {{Form::label('date', 'Date')}}
                                {{Form::date('date', \Carbon\Carbon::now())}}
                            </div>
                        </div>
                    </div>
                    {{-- Submit button --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <br />
                                {{Form::submit('Submit', ['class' => 'btn btn-success notika-btn-success waves-effect'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Form closes --}}
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@push('js')
    <script src="{{ asset('js/logbook.js?'.uniqid()) }}"></script>
@endpush
