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

@section('content')
    <div class="container" style="margin-top: 5%;flex: 1 0 auto;">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        Add Activity
                    </div>
                    <div class="card-body">
                        <form action="{{ route('daily-activities.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                                <div class="datepicker date input-group p-0 shadow-sm col-md-6">
                                    <input autocomplete="off" id="datepicker" name="date" type="text" placeholder="Choose Activity Date" class="form-control  @error('email') is-invalid @enderror" id="activityDate">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Physical Activity</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="physical_activity">
                                        <label class="form-check-label" for="inlineradioyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="physical_activity" checked>
                                        <label class="form-check-label" for="inlineradiono">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" id="physical_hidden" style="display: none">
                                <label for="physical_hours" class="col-md-4 col-form-label text-md-right">Hours</label>
                                <div class="col-md-3">
                                    <input id="hours" placeholder="Hours" type="number" min="0" max="24" value="0" class="form-control input-group @error('hours') is-invalid @enderror" name="hours">
                                </div>

                                <label for="physical_minutes" class="col-md-2 col-form-label text-md-center">Minutes</label>
                                <div class="col-md-3">
                                    <input id="minutes" placeholder="Minutes" type="number" min="0" max="60" value="0" class="form-control input-group @error('minutes') is-invalid @enderror" name="minutes">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Fruits and Vegetable</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="fruits_veges">
                                        <label class="form-check-label" for="inlineradioyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="fruits_veges" checked>
                                        <label class="form-check-label" for="inlineradiono">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" id="servings_hidden" style="display: none">
                                <label for="fruit_vege" class="col-md-4 col-form-label text-md-right">How Many Servings?</label>
                                <div class="col-md-6">
                                    <input id="fruit_vege" placeholder="Servings" type="number" min="0" max="20" value="0" class="form-control input-group @error('fruit_vege') is-invalid @enderror" name="fruit_vege">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="physical_activity" class="col-md-4 col-form-label text-md-right">Did you smoke?</label>
                                <div class="col-md-6 align-middle" style="margin-top: 1.5%">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradioyes" value="1" name="smoking">
                                        <label class="form-check-label" for="inlineradioyes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradiono" value="0" name="smoking" checked>
                                        <label class="form-check-label" for="inlineradiono">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #53b3a6; border: none">

                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/logbook.js?'.uniqid()) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        var date = new Date()
        var today = date.getDate();
        var month = date.getMonth() + 1;
        if (month < 10) { month = '0' + month; }
        var year = date.getFullYear();

        var todayDate = today +"/"+ month +"/"+ year;
        $(function () {
            // INITIALIZE DATEPICKER PLUGIN
            $('.datepicker').datepicker({
                changeMonth: false,
                changeYear: false,
                clearBtn: true,
                todayHighlight: true,
                format: "dd/mm/yyyy",
                startDate: "-15d",
                endDate: new Date(),
                stepMonths: 0,
                minViewMode: 0,
                maxViewMode: 0,
                calendarWeeks: true,
                autoclose: true,
            });
        });

        $('#datepicker').val(todayDate);

    </script>
@endpush
