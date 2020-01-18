@extends('layouts.app')

@section('main-panel')
    <div class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-signup animated fadeIn">
                <h3 class="text-center">{{__('Register')}}</h3>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="login-form">
                        <div class="form-group form-floating-label">
                            <input id="name" name="name" type="text"
                                   class="form-control input-border-bottom @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="name" class="placeholder">{{__('Name')}}</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>


                        <div class="form-group form-floating-label">
                            <input id="address" name="address" type="text"
                                   class="form-control input-border-bottom @error('address') is-invalid @enderror"
                                   value="{{ old('address') }}" required autocomplete="name" autofocus>
                            <label for="name" class="placeholder">{{__('Address')}}</label>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>


                        <div class="form-group form-floating-label">
                            <input id="email" name="email" type="email" class="form-control input-border-bottom"
                                   required>
                            <label for="email" class="placeholder">{{__('Email Address')}}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="phonenumber" name="phonenumber" type="number"
                                   class="form-control input-border-bottom"
                                   required>
                            <label for="phonenumber" class="placeholder">{{__('Phone Number')}}</label>
                            @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <label>Gender</label><br/>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="optionsRadios" value="" checked="">
                                <span class="form-radio-sign">{{__('Male')}}</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                <span class="form-radio-sign">{{__('Female')}}</span>
                            </label>
                        </div>


                        <div class="form-group form-floating-label">
                            <input id="passwordsignin" name="passwordsignin" type="password"
                                   class="form-control input-border-bottom" required>
                            <label for="passwordsignin" class="placeholder">{{__('Password')}}</label>
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
                            <input id="confirmpassword" name="confirmpassword" type="password"
                                   class="form-control input-border-bottom" required>
                            <label for="confirmpassword" class="placeholder">{{__(' Confirm Password')}}</label>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                        <div class="row form-sub m-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                                <label class="custom-control-label"
                                       for="agree">{{__('I Agree the terms and conditions.')}}</label>
                            </div>
                        </div>
                        <div class="form-action">
                            <a href="{{route('login')}}" id="show-signin"
                               class="btn btn-danger btn-rounded btn-login mr-3">{{__('Cancel')}}</a>
                            <button class="btn btn-primary btn-rounded btn-login"
                                    type="submit">{{__('Register')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
