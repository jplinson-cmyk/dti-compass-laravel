@extends('layouts.compass')

@section('content')
    <div class="container-xxl mt-2 p-5 bg-white rounded" style="min-width:1350px;max-width:100%;">
        <h1>USER PROFILE</h1>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update', auth()->user()) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-flex flex-row align-items-center mb-4 mt-4 mx-2">
                <img src="{{ $user->profile_pic ? asset('storage/images/images/' . $user->profile_pic) : asset('images/user.png') }}"
                    alt="Profile Picture" class="img-thumbnail rounded" style="max-width: 150px;">
                <div class="mb-3">
                    <input class="form-control mx-2" type="file" id="profile_pic" class="btn mx-2" name="profile_pic">
                </div>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstname" class="form-label fw-bolder">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ $user->firstname }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bolder">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="middlename" class="form-label fw-bolder">Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename"
                                value="{{ $user->middlename }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="role" class="form-label fw-bolder">Role</label>
                            <input type="text" class="form-control text-capitalize" id="role" name="role"
                                value="{{ $user->getRoleNames()->first() }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label fw-bolder">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ $user->lastname }}">
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6 password-group">
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bolder">Password<button type="button" class="btn" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Your new password must have at least 8 characters, with 1 number, 1 lowercase letter, 1 uppercase letter, and 1 special character (options are: ! @ # $ % &).">
                                <i class="fa fa-question-circle"></i>
                            </button> <span> <button type="button"
                                        class="btn btn-outline-default btn-sm text-white edit-action-btn brand-color-bg"
                                        data-editing="false"><i class="fa fa-edit"></i></button></span></label>
                            <input type="password" class="form-control" id="password" name="password" value=""
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-6 password-group">
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label fw-bolder pb-2">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="password_confirmation"
                                value="" readonly>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="text-start mt-4">
                <button type="submit" class="btn text-white" style="background-color:#1E4387;">Save Changes</button>
                <a href="{{ route('profile.index', auth()->user()) }}" class="btn btn-outline-dark mx-2">Cancel</a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.edit-action-btn').click(function() {
                var isEditing = $(this).data('editing');
                var $icon = $(this).find('i');
                var $inputs = $(this).closest('.container-xxl').find('.password-group input');

                $(this).data('editing', !isEditing);

                $icon.toggleClass('fa-edit fa-times');

                $inputs.prop('readonly', isEditing);

                if (!isEditing) {
                    $inputs.prop('readonly', false);
                }
            });
        });
    </script>
@endsection
