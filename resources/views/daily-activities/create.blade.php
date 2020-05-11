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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::open(['action' => 'DailyActivitiesController@store', 'method' => 'POST']) !!}
            <div class="form-element-list mg-t-30">
                <h1>Add your daily activity</h1><br />
                <div class="row">
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
            {!! Form::close() !!}
        </div>


        
        {{-- {!! Form::open(['action' => 'DailyActivitiesController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('physical_activity', 'Physical Activity')}}
                {{Form::radio('physical_activity', '1')}} Yes
                {{Form::radio('physical_activity', '0')}} No
            </div>
            <div class="form-group">
                {{Form::label('hours', 'Hours')}}
                {{Form::number('hours', '',)}}
                {{Form::label('minutes', 'Minutes')}}
                {{Form::number('minutes', '')}}
            </div>
            <div class="form-group">
                {{Form::label('fruit_vege', 'Fruits and Vegetables')}}
                {{Form::radio('fruit_vege', '1')}} Yes
                {{Form::radio('fruit_vege', '0')}} No
            </div>
            <div class="form-group">
                {{Form::label('servings', 'Servings')}}
                {{Form::number('servings', '')}}
            </div>
            <div class="form-group">
                {{Form::label('smoke', 'Smoke')}}
                {{Form::radio('smoke', '1')}} Yes
                {{Form::radio('smoke', '0')}} No
            </div>
            <div class="form-group">
                {{Form::label('date', 'Date')}}
                {{Form::date('date', \Carbon\Carbon::now())}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!} --}}
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
        
        <script src="{{ asset('/js/logbook.js?'.uniqid()) }}"></script>

@endpush