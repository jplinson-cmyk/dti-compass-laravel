@extends('layouts.auth-master')

@section('content')
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Login Form Column -->
            <div class="login-left col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form">
                    <form method="post" action="{{ route('login.perform') }}">
                        @csrf
                        <div class="logo-title row align-items-end mb-4">
                            <!-- Logo -->
                            <div class="col-5 image">
                                <img  src="{!! url('/images/login_logo.png') !!}" alt="Login Logo" class="img-fluid">
                            </div>
                            <!-- Title -->
                            <div class="col-7 title-column">
                                <h1 class="fw-bolder title-1" style="color:#1E4387">COMPASS</h1>
                                <p class="fw-bolder title-2">COMPETENCY ASSESSMENT</p>
                            </div>
                        </div>

                        <!-- Form Fields -->
                        <div class="mb-3 text-center">
                            <p class="text-secondary fw-bolder">Log into your account</p>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success fade show" role="alert" id="status-alert">
                                {{ session('status') }}
                            </div>

                            <script>
                                setTimeout(function() {
                                    document.getElementById('status-alert').style.display = 'none';
                                }, 3000);
                            </script>
                        @endif



                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" id="username"
                                    value="{{ old('username') }}" placeholder="jdelacruz@email.com" required autofocus>
                                <span class="input-group-text" style="background-color:#1E4387"><i
                                        class="fa fa-envelope  white-icon"></i></span>
                            </div>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif

                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Enter your password" required>
                                <span class="input-group-text" style="background-color:#1E4387"><i
                                        class="fa fa-lock white-icon"></i></span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        @if (Session::has('errors'))
                            <span class="text-danger text-left">{{ $errors->first() }}</span>
                        @endif
                        <div class="mb-4 text-left">
                            <a class="forgot-pass" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn w-100 text-light" style="background-color:#1E4387">Login</button>
                    </form>
                </div>
            </div>

            <!-- Right Side Image Column -->
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center"
                style="background-color:#f1f3f6;">
                <img src="{!! url('/images/login_img.png') !!}" alt="Login Illustration" class="img-fluid" style="max-width: 50%;">
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            @include('auth.partials.footer')
        </div>
    </div>
@endsection
