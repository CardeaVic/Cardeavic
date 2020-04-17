@extends('layouts.app')

@section('content')
    <div class="overlay text-center">
        <img src="/images/CardeaLogo.png" class="rounded mx-auto d-block img-thumbnail" alt="Cardea Logo image">
        <h1>Cardea - Health Assessment</h1>
    </div>


    
    <div class="container">
        <div>
            <h1>{{$title}}</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a class="btn btn-lg btn-primary" href="/index" role="button">Learn more</a>
        </div>
    </div>

@endsection