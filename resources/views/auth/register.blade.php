@extends('layouts.auth')
@section('content')
    <div class="register-wrapper">
        <div class="register-container">
            <div class="register-form-wrapper">
                <div class="register-panel">
                    <div class="register-panel-heading">Register For Backchecker</div>
                        <div class="register-body">
                            <form class="register-row" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="register-row{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Name</label>
                                    <input id="name" type="text" class="register-input" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="register-row{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="register-input" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                            </div>
                            <div class="register-row{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="register-input" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                            </div>
                            <div class="register-row">
                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="register-input" name="password_confirmation" required>
                            </div>
                            <div class="register-row">
                                <div class="register-group">
                                    <button type="submit" class="btn-standard btn-green">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection