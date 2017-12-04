@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row">
        <div class="reset-container">
            <div class="panel panel-default">
                <div class="reset-heading">Reset Password</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="create-form text-left" style="width:100%;" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <div class="form-section{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"><p class="text-h2" style="margin-left:1%;">Enter Your E-Mail Address</p></label>
                            <div class="col-md-6" style="width:90%;">
                                <input id="email" type="email" class="input-form" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form=btn-wrapper reset-wrapper">
                                <button type="submit" class="btn-standard btn-blue" style="padding:4%;">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection