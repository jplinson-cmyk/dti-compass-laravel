@extends('layouts.auth-master')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-brand-color text-white text-center">{{ __('Reset Password') }}</div>

                <div class="card-body text-center">
                    <img src="{!! url('/images/login_logo.png') !!}" alt="Logo" class="mb-4" style="width: 100px;">

                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input value="{{ old('email') }}"
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                placeholder="{{ __('Email address') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       
                        <div class="d-grid">
                            <button type="submit" class="btn btn-brand-color text-white">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('login.show') }}" class="btn btn-outline-secondary">{{ __('Back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
