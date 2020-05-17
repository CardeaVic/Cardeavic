@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/logbook.css?".uniqid()) }}">
    <style>
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }
    </style>
@endpush

@section('content')

    <div class="container" style="flex: 1 0 auto;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card justify-content-center text-center rounded" style="width: 100%; height: 75px">
                    Please note: Reports are generated on a weekly basis on Sunday.
                </div>
                <div class="card" style="margin-top: 2%">
                    <div class="card-header">
                        Weekly Reports
                    </div>
                    <div class="card-body">
                        @php($i = 1)
                        @if(count($sundaysWeeks) > 0)
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">View Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sundaysWeeks as $sundaysWeek)
                                    <tr>
                                        <td data-label="No.">{{ $i  }}</td>
                                        <td data-label="Start Date">{{ $sundaysWeek['weekStartDate'] -> format('d/m/Y') }}</td>
                                        <td data-label="End Date">{{ $sundaysWeek['weekEndDate'] -> format('d/m/Y') }}</td>
                                        <td data-label="View">
                                            <form action="{{ route('report.view') }}" method="POST">
                                                @csrf
                                                <input name="startDate" value="{{ $sundaysWeek['weekStartDate'] }}" hidden>
                                                <input name="endDate" value="{{ $sundaysWeek['weekEndDate'] }}" hidden>
                                                <button type="submit" class="btn btn-primary" style="background-color: #53b3a6; border: none">View</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @php($i++)
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3>You do not have any weekly reports ready</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
