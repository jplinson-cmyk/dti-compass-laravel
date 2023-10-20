@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">My Profile</h1>

    <!-- User Profile Section -->
    <div class="bg-light p-4 rounded">
        <h1>User Profile</h1>
        <div class="lead">
            View and edit your user profile information.
            <a href="#" class="btn btn-primary btn-sm float-right">Edit Profile</a>
        </div>

        <div class="mt-2">
            <p>First Name: {{ auth()->user()->firstname }}</p>
            <p>Last Name: {{ auth()->user()->lastname }}</p>
            <p>Email: {{ auth()->user()->email }}</p>
        </div>
    </div>

@endsection
