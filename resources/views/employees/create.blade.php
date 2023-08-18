@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new employee</h1>
        <div class="lead">
            Add new employee information.
        </div>

        <div class="container mt-4">
            <form method="POST" action="{{ route('employees.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input value="{{ old('firstname') }}" 
                        type="text" 
                        class="form-control" 
                        name="firstname" 
                        placeholder="First Name" required>

                    @if ($errors->has('firstname'))
                        <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input value="{{ old('lastname') }}" 
                        type="text" 
                        class="form-control" 
                        name="lastname" 
                        placeholder="Last Name" required>

                    @if ($errors->has('lastname'))
                        <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="employee_id_number" class="form-label">Employee ID</label>
                    <input value="{{ old('employee_id_number') }}"
                        type="text" 
                        class="form-control" 
                        name="employee_id_number" 
                        placeholder="Employee ID number" required>
                    @if ($errors->has('employee_id_number'))
                        <span class="text-danger text-left">{{ $errors->first('employee_id_number') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" required>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @if ($errors->has('gender'))
                        <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="employment_status" class="form-label">Employment Status</label>
                    <input value="{{ old('employment_status') }}"
                        type="text" 
                        class="form-control" 
                        name="employment_status" 
                        placeholder="Employment Status" required>
                    @if ($errors->has('employment_status'))
                        <span class="text-danger text-left">{{ $errors->first('employment_status') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="functional_group" class="form-label">Functional Group</label>
                    <input value="{{ old('functional_group') }}"
                        type="text" 
                        class="form-control" 
                        name="functional_group" 
                        placeholder="Functional Group" required>
                    @if ($errors->has('functional_group'))
                        <span class="text-danger text-left">{{ $errors->first('functional_group') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="bureau_office" class="form-label">Bureau Office</label>
                    <input value="{{ old('bureau_office') }}"
                        type="text" 
                        class="form-control" 
                        name="bureau_office" 
                        placeholder="Bureau Office" required>
                    @if ($errors->has('bureau_office'))
                        <span class="text-danger text-left">{{ $errors->first('bureau_office') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="division" class="form-label">Division</label>
                    <input value="{{ old('division') }}"
                        type="text" 
                        class="form-control" 
                        name="division" 
                        placeholder="Division" required>
                    @if ($errors->has('division'))
                        <span class="text-danger text-left">{{ $errors->first('division') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="imediate_supervisor" class="form-label">Immediate Supervisor</label>
                    <input value="{{ old('imediate_supervisor') }}"
                        type="text" 
                        class="form-control" 
                        name="immediate_supervisor" 
                        placeholder="Immediate Supervisor" required>
                    @if ($errors->has('immediate_supervisor'))
                        <span class="text-danger text-left">{{ $errors->first('immediate_supervisor') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input value="{{ old('position') }}"
                        type="text" 
                        class="form-control" 
                        name="position" 
                        placeholder="Position" required>
                    @if ($errors->has('position'))
                        <span class="text-danger text-left">{{ $errors->first('position') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="job_level" class="form-label">Job Level</label>
                    <input value="{{ old('job_level') }}"
                        type="text" 
                        class="form-control" 
                        name="job_level" 
                        placeholder="Job Level" required>
                    @if ($errors->has('job_level'))
                        <span class="text-danger text-left">{{ $errors->first('job_level') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="last_review_at" class="form-label">Last Review Date</label>
                    <input value="{{ old('last_review_at') }}"
                        type="date" 
                        class="form-control" 
                        name="last_review_at" 
                        required>
                    @if ($errors->has('last_review_at'))
                        <span class="text-danger text-left">{{ $errors->first('last_review_at') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
