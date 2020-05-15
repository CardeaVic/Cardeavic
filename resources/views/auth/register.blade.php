@extends('layouts.app2')
@push('css')
    <link rel="stylesheet" href="{{ asset("/css/cd.welcome.css?".uniqid()) }}">
@endpush
@section('content')
<div class="container">
    {{--    Logo      --}}
    <div class="row custom-logo">
        <div class="col s12 m12 l12">
            <img class="img-fluid" src="{{asset('/images/CardeaLogoSmall.png')}}">
        </div>
    </div>

    <div class="row justify-content-center z-index-2" style="margin-top: 5%">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-10 col-form-label text-md-center">Please choose a discrete username for yourself</label>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Discrete Username') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1 align-self-center" style="padding-left:0;">
                                <span>
                                    <a data-toggle="tooltip" data-placement="bottom" title="Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase and 1 Numeric character.">
                                        <i class="fas fa-info-circle p-1"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-6 offset-md-4"><input type="checkbox" onclick="showPassword()"> Show Password</span>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="login-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Background Bubbles       --}}
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
