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
                    <label for="employee_id" class="form-label">Employee ID</label>
                    <input value="{{ old('employee_id') }}"
                        type="int" 
                        class="form-control" 
                        name="employee_id" 
                        placeholder="Employee ID number" required>
                    @if ($errors->has('employee_id'))
                        <span class="text-danger text-left">{{ $errors->first('employee_id') }}</span>
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
                    <label for="employment_status_id" class="form-label">Employment Status</label>
                    <select class="form-select" name="employment_status_id" id="employment_status_id" required>
                        <option value="" disabled selected>Select Employment Status</option>
                        @foreach($employmentStatus as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employment_status_id'))
                        <span class="text-danger text-left">{{ $errors->first('employment_status_id') }}</span>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="functional_group_id" class="form-label">Functional Group</label>
                    <select class="form-select" name="functional_group_id" id="functional_group_id" required>
                        <option value="" disabled selected>Select Functional Group</option>

                        @foreach($functionalGroups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('functional_group_id'))
                        <span class="text-danger text-left">{{ $errors->first('functional_group_id') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="bureau_office_id" class="form-label">Bureau Office</label>
                    <select class="form-select" name="bureau_office_id" id="bureau_office_id" required>
                        <option value="" disabled selected>Select Bureau / Office</option>

                        @foreach($bureauOffices as $office)
                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('bureau_office_id'))
                        <span class="text-danger text-left">{{ $errors->first('bureau_office_id') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="division_id" class="form-label">Division</label>
                    <select class="form-select" name="division_id" id="division_id" >
                        <option value="" {{ old('division_id') == '' ? 'selected' : '' }}>None</option>
                
                        @foreach($divisions as $division)
                            <option value="{{ $division->id }}" {{ old('division_id') == $division->id ? 'selected' : '' }}>{{ $division->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('division_id'))
                        <span class="text-danger text-left">{{ $errors->first('division_id') }}</span>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="position_id" class="form-label">Position</label>
                    <select class="form-select" name="position_id" id="position_id" required>
                        <option value="" disabled selected>Select Position</option>
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('position_id'))
                        <span class="text-danger text-left">{{ $errors->first('position_id') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="job_level_id" class="form-label">Job Level</label>
                    <select class="form-select" name="job_level_id" id="job_level_id" required>
                        <option value="" disabled selected>Select Job Level</option>
                        @foreach($jobLevels as $level)
                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('job_level_id'))
                        <span class="text-danger text-left">{{ $errors->first('job_level_id') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="immediate_supervisor" class="form-label">Immediate Supervisor</label>
                    <input type="text" 
                        class="form-control" 
                        id="immediate_supervisor" 
                        name="immediate_supervisor"
                        placeholder="Start typing supervisor's name..." 
                        autocomplete="off"
                        value="{{ old('immediate_supervisor') }}">

                    <input type="hidden" name="supervisor_id" id="supervisor_id" 
                        value="{{ old('supervisor_id') }}">

                    <div id="supervisorList" class="list-group position-absolute"></div>

                    @if ($errors->has('immediate_supervisor'))
                        <span class="text-danger text-left">{{ $errors->first('immediate_supervisor') }}</span>
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

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="createUserAccount" id="createUserAccount">
                        <label class="form-check-label" for="createUserAccount">
                          Create User Account
                        </label>
                      </div>
                </div>

                <button type="submit" class="btn btn-primary">Save employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    let supervisorInput = $('#immediate_supervisor');
    let supervisorList = $('#supervisorList');

    // Function to fetch supervisor suggestions
    supervisorInput.on('keyup', function () {
        let query = $(this).val().trim();

        if (query.length < 2) {
            supervisorList.fadeOut(); 
            return; // Don't search for empty or short queries
        }

        $.ajax({
            url: "{{ route('employees_supervisors.search') }}", // Adjust route if necessary
            type: "GET",
            data: { q: query },
            success: function (data) {
                supervisorList.empty().fadeIn(); // Clear and show dropdown

                if (data.length > 0) {
                    $.each(data, function (index, employee) {
                        supervisorList.append(`<a href="#" class="list-group-item list-group-item-action supervisor-item"
                                                data-id="${employee.id}">${employee.firstname} ${employee.lastname}</a>`);
                    });
                } else {
                    supervisorList.append(`<a href="#" class="list-group-item list-group-item-action disabled">No results found</a>`);
                }
            },
            error: function () {
                supervisorList.fadeOut();
            }
        });
    });

    // When a user selects a name from the dropdown
    $(document).on('click', '.supervisor-item', function (e) {
        e.preventDefault();
        let selectedName = $(this).text();
        let selectedId = $(this).data('id');

        supervisorInput.val(selectedName);
        supervisorList.fadeOut();

        // Store the selected supervisor ID in the hidden field
        $('#supervisor_id').remove(); // Remove existing hidden field if any
        $('<input>').attr({
            type: 'hidden',
            id: 'supervisor_id',
            name: 'supervisor_id',
            value: selectedId
        }).appendTo('form');
    });

    // Hide the dropdown when clicking outside
    $(document).click(function (e) {
        if (!$(e.target).closest('#immediate_supervisor, #supervisorList').length) {
            supervisorList.fadeOut();
        }
    });
});
</script>
