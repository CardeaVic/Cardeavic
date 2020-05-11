@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
@endpush

@section('content')
    {{-- Main Container for Daily log --}}
    <div class="w3-container">
        {{-- If statement for daily log --}}
        @if(count($daily_activities) > 0)
            <div class="data-table-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="data-table-list">
                                <div class="basic-tb-hd">
                                    <h1 class="w3-center">Your daily log</h1>
                                </div>
                                {{-- Table for daily activities --}}
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-striped w3-centered">
                                        {{-- Table headers --}}
                                        <thead>
                                            <tr class="custom-table-header nk-white">
                                                <th class="w3-text-white" style="font-size: 18px;">Date</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Physical Activity</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Fruit and Vegetables</th>
                                                <th class="w3-text-white" style="font-size: 18px;">Smoke</th>
                                                <th></th>
                                                {{-- Plus icon --}}
                                                <th style="padding: 0"><a href="/daily-activities/create" class="button">
                                                    <span class="fas fa-plus-circle" style="font-size:42px; color:white">
                                                    add_circle_outline
                                                    </span></a></th>
                                            </tr>
                                            <tr class="custom-table-header nk-white" >
                                                <th></th>
                                                <th class="w3-text-white" style="font-size: 18px;">Minutes</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        {{-- Table body --}}
                                        <tbody>
                                            @foreach($daily_activities as $daily_activity)
                                                {{-- Table rows --}}
                                                <tr>
                                                    <td>{{ $daily_activity->date }}</td>
                                                    <td>{{ $daily_activity->minutes + $daily_activity->hours * 60 }}
                                                        @if( $daily_activity->minutes == '' ) 0 @endif</td>
                                                    <td>{{ $daily_activity->servings}}
                                                        @if( $daily_activity->servings == '' ) 0 @endif</td>
                                                    <td>@if( $daily_activity->smoke == '1' ) Yes
                                                        @else No
                                                        @endif
                                                    </td>
                                                    {{-- Edit button --}}
                                                    <td><a href="/daily-activities/{{$daily_activity->id}}/edit" class="btn btn-info notika-btn-info waves-effect">Edit</td>
                                                    {{-- Delete button --}}
                                                    <td>{!! Form::open(['action' => ['DailyActivitiesController@destroy', $daily_activity->id], 'method' => 'POST']) !!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                            {{Form::submit('Delete', ['class' => 'btn btn-danger notika-btn-danger waves-effect'])}}
                                                        {!! Form::close() !!}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $daily_activities->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- Else condition when no records founds --}}
            <p>No activites found - Add one</p>
            <a href="/daily-activities/create" class="button"><i class="fas fa-plus-circle"></i></a>
        @endif
    </div>
    {{-- Main Container ends --}}
@endsection

@push('js')

@endpush
