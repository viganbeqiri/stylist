@extends('frontend.layouts.app')


@section('frontend-content')
<div class="tm-section tm-login-register-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <form method="POST" action="{{ route('login') }}" class="tm-form tm-login-form">
                    @csrf
                    <h4>Login</h4>
                    <p>Become a part of our community!</p>
                    <div class="tm-form-inner">
                        <div class="tm-form-field">
                            <label for="login-email">User email address*</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="tm-form-field">
                            <label for="login-password">Password*</label>
                            <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="tm-form-field">
                            <input class="form-check-input" type="checkbox" name="remember" id="login-remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="login-remember">Remember Me</label>
                            <p class="mb-0"><a href="#">Forgot your password?</a></p>
                        </div>
                        <div class="tm-form-field">
                            <button type="submit" class="tm-button">Login</button>
                        </div>
                        <div class="tm-form-field">
                            <div class="tm-form-sociallogin">
                                <h6>Or, Login with :</h6>
                                <ul>
                                    <li><a href="#" class="facebook-btn"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" class="google-btn"><i class="ion-social-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form action="#" class="tm-form tm-register-form">
                    <h4>Create an account</h4>
                    <p>Welcome! Register for an account</p>
                    <div class="tm-form-inner">
                        <div class="tm-form-field">
                            <label for="register-username">Username</label>
                            <input type="text" id="register-username" required="required">
                        </div>
                        <div class="tm-form-field">
                            <label for="register-email">Email address</label>
                            <input type="email" id="register-email" required="required">
                        </div>
                        <div class="tm-form-field">
                            <label for="register-password">Password</label>
                            <input type="password" id="register-password" name="register-pass" required="required">
                        </div>
                        <div class="tm-form-field">
                            <div>
                                <input type="checkbox" id="register-pass-show" name="register-pass-show">
                                <label for="register-pass-show">Show Password</label>
                            </div>
                            <div>
                                <input type="checkbox" id="register-terms" name="register-terms">
                                <label for="register-terms">I have read and agree to the website <a href="#">terms and
                                        conditions</a></label>
                            </div>
                        </div>
                        <div class="tm-form-field">
                            <button type="submit" class="tm-button">Register</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection