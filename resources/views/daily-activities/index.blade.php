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
    <div class="container" style="flex: 1 0 auto;" >
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-end" style="margin-top: 16px">
                <button class="btn btn-primary" style="background-color: #53b3a6; border: none; margin-right:16px" onclick="window.location.href = '{{ route('daily-activities.create') }}'">New Activity</button>
                    <button class="btn btn-primary" style="background-color: #53b3a6; border: none; margin-right:16px" onclick="window.location.href = '{{ route('daily-activities.export') }}'">Export</button>
                </div>
                <div class="card" style="margin-top: 2%">
                    <div class="card-header">
                        Daily Activities
                    </div>
                    <div class="card-body">
                        @if($daily_activities -> count() > 0)
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Physical Activity (in minutes)</th>
                                    <th scope="col">Fruit and Vegetable (servings)</th>
                                    <th scope="col">Smoking</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($daily_activities as $daily_activity)
                                    <tr>
                                        <td data-label="Date">{{ $daily_activity -> date -> format('d-m-Y') }}</td>

                                        @if($daily_activity -> physical_activity == 1)
                                            @php($minutes = ($daily_activity -> hours)*60 + ($daily_activity -> minutes))
                                            <td data-label="Physical Activity">{{ $minutes}}</td>
                                        @else
                                            <td data-label="Physical Activity">0</td>
                                        @endif

                                        @if($daily_activity -> fruit_vege == 1)
                                            <td data-label="Fruits and Vegetables">{{ $daily_activity -> servings}}</td>
                                        @else
                                            <td data-label="Fruits and Vegetables">0</td>
                                        @endif

                                        @if($daily_activity -> smoke == 1)
                                            <td data-label="Smoking">Yes</td>
                                        @else
                                            <td data-label="Smoking">No</td>
                                        @endif

                                        <td data-label="Edit"><a href="/daily-activities/{{$daily_activity->id}}/edit" class="btn btn-primary" style="background-color: #53b3a6; border: none">
                                            Edit</a></td>
                                        <td data-label="Delete">
                                            <form action="{{ route('daily-activities.destroy', $daily_activity->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="float-right" style="margin-top: 8px">{{ $daily_activities->links() }}</div>
                        @else
                            <h3>You have not entered any Daily Activities.</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
