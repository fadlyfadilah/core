@extends('layouts.auth.app')
@section('content')
<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
    <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
        style="background-image: url('assets/media/bg/bg-3.jpg');">
        <div class="login-form text-center p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-15">
                <a href="#">
                    <img src="assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                </a>
            </div>
            <!--end::Login Header-->
            <!--begin::Login Sign in form-->
            <div class="login-signin">
                <div class="mb-20">
                    <h3>Sign Up</h3>
                    <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
                </div>
                <form class="form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="name"
                            name="name" />
                    </div>
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email"
                            name="email" autocomplete="off" />
                    </div>
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password"
                            name="password" />
                    </div>
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
                            placeholder="Confirm Password" name="password_confirmation" />
                    </div>
                    <div class="form-group mb-5 text-left">
                        <div class="checkbox-inline">
                            <label class="checkbox m-0">
                                <input type="checkbox" name="agree" />
                                <span></span>I Agree the
                                <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
                        </div>
                        <div class="form-text text-muted text-center"></div>
                    </div>
                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                        <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign
                            Up</button>
                        <button id="kt_login_signup_cancel"
                            class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                    </div>
                </form>
            </div>
            <!--end::Login Sign in form-->
        </div>
    </div>
</div>
@endsection
