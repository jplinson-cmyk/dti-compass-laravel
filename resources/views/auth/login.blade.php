@extends('layouts.auth-master')

@section('content')
<div class="container-fluid">
    <div class="row vh-100 align-items-center">
        <div class="login-form col-md-6 d-none d-md-flex h-100 align-items-center justify-content-center">
                <form method="post" action="{{ route('login.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="logo-title row align-items-end">
                        <div class="col-md-6">
                            <img src="{!! url('/images/login_logo.png') !!}" alt="" class="img-fluid" style="max-width: 100%; height: 210px;">
                        </div>
                        <div class="col-md-6">
                            <h1 class="fw-bolder" style="color:#1E4387">COMPASS</h1>
                            <p class="fw-bolder">COMPETENCY ASSESSMENT</p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <p class="text-center text-secondary fw-bolder mb-3">Log into your account</p>
                        </div>
                    </div>

                    @include('layouts.partials.messages')
                    <div class="login-form-content">
                        <div class="text-left mb-3 fw-bolder">
                            <label for="username" class="text-left">Email</label>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="jdelacruz@email.com" required="required" autofocus>
                                <span class="input-group-text" style="background-color:#1E4387;"><i class="fa fa-envelope white-icon"></i></span>
                            </div>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>      
                            @endif
                        </div>

                        <div class="text-left mb-3 fw-bolder">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter your Password" required="required">
                                <span class="input-group-text" style="background-color:#1E4387;"><i class="fa fa-lock white-icon"></i></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        @if(Session::has('errors'))
                            <span class="text-danger text-left">{{$errors->first()}}</span>
                        @endif
                        <div class="mt-2 mb-3">
                            <a class="link-primary" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                        <button class="w-100 btn btn-lg text-light mt-2 mb-3" type="submit" style="background-color:#1E4387;">Login</button>
                    
                        
                    </div>

                </form>
        </div>

        <div class="col-md-6 d-none d-md-flex h-100 align-items-center justify-content-center" style="background-color:#f1f3f6;">
            <img src="{!! url('/images/login_img.png') !!}" alt="Your Image Description" width="50%" class="mx-auto d-block">
        </div>
      
    </div>
    <div class="row">
         @include('auth.partials.footer')
    </div>
</div>
@endsection
