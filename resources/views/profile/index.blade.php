@extends($layout)

@section('content')
    <div class="container-xxl mt-2 p-5 bg-white rounded" style="min-width:1350px;max-width:100%;">
        <h1>User Profile</h1>
        <div class="d-flex flex-row align-items-center mb-4 mt-4 mx-2">
            <img src="{{ $user->profile_pic ? asset('storage/images/images/' . $user->profile_pic) : asset('images/user.png')  }}" alt="Profile Picture" class="img-thumbnail rounded" style="max-width: 150px;">
        </div>
        <div class="card-body p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bolder">First Name</label>
                        <input type="text" class="form-control" value="{{ $user->firstname }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Middle Name</label>
                        <input type="text" class="form-control" value="{{ $user->middlename }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Role</label>
                        <input type="text" class="form-control text-capitalize" value="{{ $user->getRoleNames()->first() }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Email Address</label>
                        <input type="text" class="form-control" value="{{ $user->email }}" disabled>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bolder">Last Name</label>
                        <input type="text" class="form-control" value="{{ $user->lastname }}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-start mt-4">
            <a href="{{ route('profile.edit', $user) }}" class="btn text-white" style="background-color:#1E4387;">Edit Profile</a>
        </div>
    </div>
@endsection
