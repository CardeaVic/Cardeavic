@extends('layouts.app3')
{{--Css Imports--}}
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/dashboard.css?".uniqid()) }}">
@endpush

@section('content')
    {{-- Main Container for Dashboard--}}
    <div class="w3-container wrapper">

    </div>
    {{-- Main Container Ends   --}}
@endsection
{{--JS Import--}}
@push('js')
    <script src="{{ asset('/js/dashboard.js?'.uniqid()) }}"></script>
@endpush
