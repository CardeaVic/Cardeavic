@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
    <link rel="stylesheet" href="{{ asset("/css/dashboard.css?".uniqid()) }}">
    
@endpush

@section('content')
    <div class="w3-container wrapper">
        <div class="w3-row custom-logo">
            <div class="w3-col s12 m12 l12">
                <img class="w3-image" src="{{asset('/images/CardeaLogoSmall.png')}}">
            </div>
        </div>
        <div class="w3-row-padding z-index-2">
            <div class="w3-col l12 s12 m12">
                <h1 class="h2 w3-center w3-text-white">Dashboard</h1>
                <canvas class="my-4 w-100" id="myChart" width="400" height="200"></canvas>

                <h2 class="h2 w3-center w3-text-white">Your records</h2>
                <table class="w3-table-all w3-card-4">
                    <thead>
                      <tr class="w3-teal">
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

        
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('/js/dashboard.js?'.uniqid()) }}"></script>
@endpush