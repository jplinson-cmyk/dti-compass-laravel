@extends('layouts.auth-master')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <div class="login-form mt-4">
                    <form method="post" action="{{ route('login.perform') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <img class="mb-4" src="{!! url('/images/login_logo.png') !!}" alt="" width="70%" height="auto">

                        <h1 class="h3 mb-3 fw-normal fw-bold">COMPASS</h1>

                        @include('layouts.partials.messages')

                        <div class="form-group form-floating mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email" required="required" autofocus>
                                <span class="input-group-text" style="background-color:#1E4387;"><i class="fa fa-envelope white-icon"></i></span>
                            </div>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>      
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                <span class="input-group-text" style="background-color:#1E4387;"><i class="fa fa-lock white-icon"></i></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        @if(Session::has('errors'))
                            <span class="text-danger text-left">{{$errors->first()}}</span>
                        @endif
                        <div class="mt-2">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <button class="w-100 btn btn-lg text-light mt-2" type="submit"  style="background-color:#1E4387;">Login</button>
                    
                        @include('auth.partials.copy')
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-none d-md-block" style="background-color:#f1f3f6;">
            <img src="{!! url('/images/login_img.png') !!}" alt="Your Image Description" class="img-fluid">
        </div>
    </div>
</div>
@endsection
