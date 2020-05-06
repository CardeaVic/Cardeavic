@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">

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
@endpush

@section('content')
    <div class="container">
        
        {{-- {!! Form::open(['action' => ['DailyActivitiesController@update', $daily_activity->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('physical_activity', 'Physical Activity')}}
                @if ($daily_activity->physical_activity == 1)
                    {{Form::radio('physical_activity', '1', true)}} Yes
                    {{Form::radio('physical_activity', '0')}} No
                @else 
                    {{Form::radio('physical_activity', '1')}} Yes
                    {{Form::radio('physical_activity', '0', true)}} No
                @endif
            </div>
            <div class="form-group">
                {{Form::label('hours', 'Hours')}}
                {{Form::number('hours', $daily_activity->hours)}}
                {{Form::label('minutes', 'Minutes')}}
                {{Form::number('minutes', $daily_activity->minutes)}}
            </div>
            <div class="form-group">
                {{Form::label('fruit_vege', 'Fruits and Vegetables')}}
                @if ($daily_activity->fruit_vege == 1)
                    {{Form::radio('fruit_vege', '1', true)}} Yes
                    {{Form::radio('fruit_vege', '0')}} No
                @else 
                    {{Form::radio('fruit_vege', '1')}} Yes
                    {{Form::radio('fruit_vege', '0', true)}} No
                @endif
            </div>
            <div class="form-group">
                {{Form::label('servings', 'Servings')}}
                {{Form::number('servings', $daily_activity->servings)}}
            </div>
            <div class="form-group">
                {{Form::label('smoke', 'Smoke')}}
                @if ($daily_activity->smoke == 1)
                    {{Form::radio('smoke', '1', true)}} Yes
                    {{Form::radio('smoke', '0')}} No
                @else 
                    {{Form::radio('smoke', '1')}} Yes
                    {{Form::radio('smoke', '0', true)}} No
                @endif
            </div>
            <div class="form-group">
                {{Form::label('date', 'Date')}}
                {{Form::date('date', $daily_activity->date)}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!} --}}

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::open(['action' => ['DailyActivitiesController@update', $daily_activity->id], 'method' => 'POST']) !!}
            <div class="form-element-list mg-t-30">
                <h1>Edit your activity</h1><br />
                <div class="row">
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
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@push('js')
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
@endpush