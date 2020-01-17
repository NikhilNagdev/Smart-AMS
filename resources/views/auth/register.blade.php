@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-signup animated fadeIn">
            <h3 class="text-center">Sign Up</h3>
            <div class="login-form">
                <form action="{{ route('register')}}" method="POST">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="name" name="name" type="text"
                               class="form-control input-border-bottom @error('name') is-invalid @enderror"
                               value="{{old('name')}}" required autofocus>
                        <label for="name" class="placeholder">{{__('Enter Name')}}</label>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email"
                               class="form-control input-border-bottom @error('email') is-invalid @enderror"
                               value="{{old('email')}}" autocomplete="email" required>
                        <label for="email" class="placeholder">{{__('Email')}}</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password"
                               class="form-control input-border-bottom @error('password') is-invalid @enderror"
                               required autocomplete="new-password">
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
                    <div class="form-group form-floating-label">
                        <input id="password-confirm" name="password_confirmation" type="password"
                               class="form-control input-border-bottom"
                               required autocomplete="new-password">
                        <label for="password-confirm" class="placeholder">{{__('Confirm Password')}}</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="address" name="address" type="text"
                               class="form-control input-border-bottom @error('address') is-invalid @enderror"
                               value="{{old('address')}}" required autofocus autocomplete="address">
                        <label for="name" class="placeholder">{{__('Address')}}</label>
					@error('address')
					<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="phonenumber" name="phonenumber" type="tel"
                               class="form-control input-border-bottom @error('phonenumber') is-invalid @enderror"
                               value="{{old('phonenumber')}}" required autocomplete="phonenumber">
                        <label for="phonenumber" class="placeholder">{{__('Enter Contact Number')}}</label>
                        @error('phonenumber')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-action">
                        <a href="{{route('login')}}" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">{{__('Cancel')}}</a>
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
