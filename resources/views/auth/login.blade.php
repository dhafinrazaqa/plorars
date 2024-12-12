@extends('layouts.app')

@section('title', 'Login Plorars')

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form id="register-form" method="POST" action="{{ route('register-handler') }}">
                @csrf
                <h1>Create Account</h1>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="register-username" name="username" placeholder="Username"
                        required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" id="register-password" class="form-control" name="password"
                        placeholder="Password" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" id="register-password-confirm" class="form-control" name="password_confirmation"
                        placeholder="Confirm Password" required>
                </div>
                <span id="error-message-register" class="text-danger"></span><br>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>

        <!-- Login Form -->
        <div class="form-container sign-in">
            <form id="login-form" method="POST" action="{{ route('login-handler') }}">
                @csrf
                <h1>Sign In</h1>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="login-username" name="username" placeholder="Username"
                        required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" id="login-password" class="form-control" name="password" placeholder="Password"
                        required>
                </div>
                <div class="checkbox-container">
                    <label class="checkbox-label" for="rememberMe">
                        <input type="checkbox" class="checkbox-input" id="rememberMe" name="remember">
                        <p class ="text-center">Remember me</p>
                    </label>
                </div>
                <span id="error-message-login"></span><br>
                <div class="forgot-pass">
                    <a>Forgot your password?</a>
                    <a class="click" href="#">Click here</a><br>
                </div>
                <div class="btn-sign-in">
                    <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
                </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <div class="img-container-register">
                        <img class="resize-img" src="{{ asset('images/logo.png') }}">
                        <div class="title">
                            <p style="margin-top: 50px;" class="resize-text">plorars</p>
                        </div>
                    </div>
                    <div class="btn-sign-in-register">
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                </div>
                <div class="toggle-panel toggle-right">
                    <div class="text-container">
                        <h2>Welcome Back!</h2>
                    </div>
                    <div class="title">
                        <h1 style="margin-left: 30px;">PLORARS</h1>
                    </div>
                    <div class="group-img">
                        <img src="{{ asset('images/logo2.png') }}" class="group-resize">
                    </div>
                    <p style="letter-spacing: 5px; font-size: 12px;" class="text">if you don't have an account</p>
                    <div class="btn-register">
                        <button style="top: 140px;" class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
