@extends('layouts.compass')

@section('content')
    <div class="container-xxl mt-2 p-5 bg-white rounded" style="min-width:1350px;max-width:100%;">
        <h1>USER PROFILE</h1>
        <form action="{{ route('profile.update', auth()->user()) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-flex flex-row align-items-center mb-4 mt-4 mx-2">
                <img src="{{ $user->profile_pic ? asset('storage/profilepics/' . $user->profile_pic) : asset('images/default-profile.png') }}" alt="Profile Picture" class="img-thumbnail rounded" style="max-width: 150px;">
                <div class="mb-3">
                    <input class="form-control mx-2" type="file" id="profile_pic" class="btn mx-2"  name="profile_pic" > 

                  </div>           
                {{-- <a href="{{ route('profile.edit', auth()->user()) }}" class="btn btn-outline-danger">RESET</a> --}}
            </div>
            <div class="card-body p-4">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ $user->firstname }}">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ $user->lastname }}">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control text-capitalize" id="role" name="role"
                                value="{{ $user->getRoleNames()->first() }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-start mt-4">
                <button type="submit" class="btn text-white" style="background-color:#1E4387;">Save Changes</button>
                <a href="{{ route('profile.index', auth()->user()) }}" class="btn btn-outline-dark mx-2">Cancel</a>
            </div>
        </form>
    </div>
@endsection
