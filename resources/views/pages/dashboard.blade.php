@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/dashboard.css?".uniqid()) }}">
        <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush



@section('content')
    @include('include.navbar')
    <div class="w3-container wrapper">
        <div class="w3-row-padding w3-content">
            <div class="w3-col l12 s12 m12">
                <h1 class="h2 w3-center">Dashboard</h1>
                <canvas class="my-4 w-100" id="myChart" width="400" height="200"></canvas>

                <h2 class="h2 w3-center">Your records</h2>
                <table class="w3-table-all w3-card-4">
                    <thead>
                      <tr class="custom-table-header">
                        <th>#</th>
                        <th>Date</th>
                        <th>Activity</th>
                        <th>Fruit intake</th>
                        <th>Vegetable intake</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>02-02-2020</td>
                        <td>Yes</td>
                        <td>No</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>02-03-2020</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>02-04-2020</td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>02-05-2020</td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>02-06-2020</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>No</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('/js/dashboard.js?'.uniqid()) }}"></script>
@endpush