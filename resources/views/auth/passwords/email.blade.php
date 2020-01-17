@extends('layouts.app')

@section('content')
    @extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Send Reset Link</h3>
            <div class="login-form">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email"
                               class="form-control input-border-bottom @error('email') is-invalid @enderror"
                               value="{{old('email')}}" required autocomplete="email">
                        <label for="username" class="placeholder">{{ __('E-Mail Address') }}</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-action mb-3">

                        <button type="submit" class="btn btn-primary btn-rounded btn-login">
                            {{ __('Send Email') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection








