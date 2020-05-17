@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
        .datepicker td, .datepicker th {
            width: 0.50rem !important;
            height: 0.50rem !important;
            font-size: 0.85rem !important;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */
        .input-group {
            border-radius: 30rem;
        }

        input.form-control {
        }

        input.form-control:focus {
            box-shadow: none;
        }

        input.form-control::placeholder {
            font-style: italic;
        }

        .input-group-text {
            border-radius: 0 30rem 30rem 0;
            border: none;
        }

        .datepicker-dropdown {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }


    </style>
@endpush
<?php
use Carbon\Carbon;
?>
@section('content')
    {{-- Main Container for edit --}}
    <div class="container" style="flex: 1 0 auto;" >
        {{-- Error messages --}}
        @if(count($errors) > 0)
            <div class="alert alert-danger">    
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Main container for edit activity --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        Edit Activity
                    </div>
                    {{-- Edit activity body --}}
                    <div class="card-body">
                        <form action="{{ route('daily-activities.update', $daily_activity->id) }}" method="POST">
                            @csrf
                            {{-- Date picker --}}
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                                <div class="datepicker date input-group p-0 shadow-sm col-md-6">
                                    <input id="datepicker" name="date" type="text" placeholder="{{ Carbon::parse($daily_activity->date)->format('d-m-Y') }}" class="form-control  @error('email') is-invalid @enderror" id="activityDate" disabled>
                                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div>
                                </div>
                            </div>
                            {{-- Physical activity --}}
                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Physical Activity</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    @if($daily_activity->physical_activity == '1')
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="physical_activity" checked>
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="physical_activity">
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @else
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="physical_activity">
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="physical_activity" checked>
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Hours and minutes --}}
                            @if($daily_activity->physical_activity == '1')
                                <div class="form-group row" id="physical_hidden">
                                    <label for="physical_hours" class="col-md-4 col-form-label text-md-right">Hours</label>
                                    <div class="col-md-3">
                                    <input id="hours" value="{{ $daily_activity->hours }}" placeholder="Hours" type="number" min="0" max="24" class="form-control input-group @error('hours') is-invalid @enderror" name="hours">
                                    </div>

                                    <label for="physical_minutes" class="col-md-2 col-form-label text-md-center">Minutes</label>
                                    <div class="col-md-3">
                                        <input id="minutes" value="{{ $daily_activity->minutes }}" placeholder="Minutes" type="number" min="0" max="60" class="form-control input-group @error('minutes') is-invalid @enderror" name="minutes">
                                    </div>
                                </div>
                            @else
                                <div class="form-group row" id="physical_hidden" style="display: none">
                                    <label for="physical_hours" class="col-md-4 col-form-label text-md-right">Hours</label>
                                    <div class="col-md-3">
                                    <input id="hours" value="0" placeholder="Hours" type="number" min="0" max="24" class="form-control input-group @error('hours') is-invalid @enderror" name="hours">
                                    </div>

                                    <label for="physical_minutes" class="col-md-2 col-form-label text-md-center">Minutes</label>
                                    <div class="col-md-3">
                                        <input id="minutes" value="0" placeholder="Minutes" type="number" min="0" max="60" class="form-control input-group @error('minutes') is-invalid @enderror" name="minutes">
                                    </div>
                                </div>
                            @endif
                            {{-- Fruits and vegetables --}}
                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Fruits and Vegetable</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    @if($daily_activity->fruit_vege == '1')
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="fruits_veges" checked>
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="fruits_veges">
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @else
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="fruits_veges">
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="fruits_veges" checked>
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Servings --}}
                            @if($daily_activity->fruit_vege == '1')
                                <div class="form-group row" id="servings_hidden">
                                    <label for="fruit_vege" class="col-md-4 col-form-label text-md-right">How Many Servings?</label>
                                    <div class="col-md-6">
                                        <input id="fruit_vege" value="{{ $daily_activity->servings }}" placeholder="Servings" type="number" min="0" max="20" class="form-control input-group @error('fruit_vege') is-invalid @enderror" name="fruit_vege">
                                    </div>
                                </div>
                            @else
                                <div class="form-group row" id="servings_hidden" style="display: none">
                                    <label for="fruit_vege" class="col-md-4 col-form-label text-md-right">How Many Servings?</label>
                                    <div class="col-md-6">
                                        <input id="fruit_vege" value="0" placeholder="Servings" type="number" min="0" max="20" class="form-control input-group @error('fruit_vege') is-invalid @enderror" name="fruit_vege">
                                    </div>
                                </div>
                            @endif
                            {{-- Smoking --}}
                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Did you smoke?</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    @if($daily_activity->smoke == '1')
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="smoking" checked>
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="smoking">
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @else
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="smoking">
                                            <label class="form-check-label" for="inlineradioyes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="smoking" checked>
                                            <label class="form-check-label" for="inlineradiono">No</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Submit --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #53b3a6; border: none">
                                        @method('PUT')
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main edit form container ends --}}
    </div>
    {{-- Main Container ends --}}
@endsection


@push('js')
    <script src="{{ asset('js/logbook.js?'.uniqid()) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    
@endpush

