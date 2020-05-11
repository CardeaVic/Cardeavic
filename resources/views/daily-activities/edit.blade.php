@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
@endpush

@section('content')
    {{-- Main Container for edit --}}
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{-- Form opens --}}
            {!! Form::open(['action' => ['DailyActivitiesController@update', $daily_activity->id], 'method' => 'POST']) !!}
            <div class="form-element-list mg-t-30">
                <h1>Edit your activity</h1><br />
                <div class="row">
                    {{-- Physical activity radio button --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                {{Form::label('physical_activity', 'Physical Activity')}}<br />
                                @if ($daily_activity->physical_activity == 1)
                                    {{Form::radio('physical_activity', '1', true)}} Yes
                                    {{Form::radio('physical_activity', '0')}} No
                                @else
                                    {{Form::radio('physical_activity', '1')}} Yes
                                    {{Form::radio('physical_activity', '0', true)}} No
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- Hours and minutes input --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                {{Form::number('hours', $daily_activity->hours,['class' => 'form-control', 'placeholder' => 'Hours'])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                {{Form::number('minutes', $daily_activity->minutes,['class' => 'form-control', 'placeholder' => 'Minutes'])}}
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
                                @if ($daily_activity->fruit_vege == 1)
                                    {{Form::radio('fruit_vege', '1', true)}} Yes
                                    {{Form::radio('fruit_vege', '0')}} No
                                @else
                                    {{Form::radio('fruit_vege', '1')}} Yes
                                    {{Form::radio('fruit_vege', '0', true)}} No
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- Servings input --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                {{Form::number('servings', $daily_activity->servings,['class' => 'form-control', 'placeholder' => 'Servings'])}}
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
                                @if ($daily_activity->smoke == 1)
                                    {{Form::radio('smoke', '1', true)}} Yes
                                    {{Form::radio('smoke', '0')}} No
                                @else
                                    {{Form::radio('smoke', '1')}} Yes
                                    {{Form::radio('smoke', '0', true)}} No
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- Date input --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st" disabled>
                                <br />
                                {{Form::label('date', 'Date')}}
                                {{Form::date('date', $daily_activity->date, ['disabled'])}}
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
                                {{Form::hidden('_method', 'PUT')}}
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
    {{-- Main Container ends --}}
@endsection

@push('js')

@endpush
