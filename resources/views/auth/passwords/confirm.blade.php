@extends('layouts.auth')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ asset('images/logo.svg') }}">
                        </div>
                        <p class="text-center h4">{{ __('Confirm Password') }}</p>
                        <hr>
                        {{ __('Please confirm your password before continuing.') }}
                        <form class="pt-3" method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                            </div>
                            @if (Route::has('password.request'))
                                <hr>
                                <a href="{{ route('password.request') }}" class="btn btn-danger btn-block">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
