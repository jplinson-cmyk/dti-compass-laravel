@extends('layouts.auth-master')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-header bg-brand-color text-white text-center">{{ __('Reset Password') }}</div>

                <div class="card-body text-center">
                    <img src="{!! url('/images/login_logo.png') !!}" alt="Logo" class="mb-4" style="width: 100px;">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="{{ __('Email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="alert alert-info">
                                <p>Your new password must have at least 8 characters, with 1 number, 1 lowercase letter, 1 uppercase letter, and 1 special character (options are: ! @ # $ % &).</p>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('New Password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm New Password') }}">
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-brand-color text-white">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
