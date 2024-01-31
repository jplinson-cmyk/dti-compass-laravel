@extends('layouts.compass')

@section('content')
    <div class="container-xxl mt-2 p-5 bg-white rounded" style="min-width:1350px;max-width:100%;">
        <h1>User Profile</h1>
        <div class="d-flex flex-row align-items-center mb-4 mt-4 mx-2">
            <img src="{{ $user->profile_pic ? asset('storage/profilepics/' . $user->profile_pic) : asset('images/default-profile.png') }}" alt="Profile Picture" class="img-thumbnail rounded" style="max-width: 150px;">
        </div>
        <div class="card-body p-4">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <div class="form-control">{{ $user->firstname }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <div class="form-control">{{ $user->lastname }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <div class="form-control text-capitalize">{{ $user->getRoleNames()->first() }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <div class="form-control">{{ $user->email }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-start mt-4">
            <a href="{{ route('profile.edit', $user) }}" class="btn text-white" style="background-color:#1E4387;">Edit Profile</a>
        </div>
    </div>
@endsection
