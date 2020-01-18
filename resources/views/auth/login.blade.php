@extends('layouts.app')

@section('main-panel')
    <div class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">{{_('Sign In')}}</h3>
                <div class="login-form">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group form-floating-label">
                            <input id="email" name="email" type="email"
                                   class="form-control input-border-bottom @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}"
                                   required>
                            <label for="email" class="placeholder">{{ __('Email Address')}}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="password" type="password"
                                   class="form-control input-border-bottom @error('password') is-invalid @enderror"
                                   autocomplete="current-password" required>
                            <label for="password" class="placeholder">{{__('Password')}}</label>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="row form-sub m-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="rememberme">{{__('Remember me')}}</label>
                            </div>
                            @if (Route::has('password.request'))
                                        <a class="link float-right" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                            @endif

                        </div>
                        <div class="form-action mb-3">
                            <button class="btn btn-primary btn-rounded btn-login" type="submit">{{__('Login')}}</button>
                        </div>
                        <div class="login-account">
                            <span class="msg">Don't have an account yet ?</span>
                            <a href="{{route('register')}}" id="show-signup" class="link">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



