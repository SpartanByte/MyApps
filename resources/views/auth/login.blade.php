@extends('layouts.auth')
@section('content')
<div class="login-wrapper">
    <div class="login-container">
            <div class="login-form-wrapper">
                <div class="login-panel">
                <div class="login-panel-heading">Login  Into Backchecker</div>
                    <div class="login-body">
                    <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <div class="login-row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>
                                <div>
                                <input id="email" type="email" class="login-input" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="login-row{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>

                            <div>
                            <input id="password" type="password" class="login-input" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="login-row">
                            <div class="login-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="login-row">
                            <div class="login-btn-group">
                                <button type="submit" class="btn-standard btn-green login-btn">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="login-options-wrapper">
                        <div class="login-options">
                            <a class="btn-standard btn-green" href="/register">Register</a><a class="btn-standard btn-green" href="/password/reset">Reset Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection