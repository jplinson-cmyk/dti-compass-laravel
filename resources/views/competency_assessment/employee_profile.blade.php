@extends('layouts.app-master')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-3">EMPLOYEE PROFILE</h1>
    <p class="text-center mb-4">Please provide all the required information below to complete your assessment profile.</p>

    <form method="post" action="{{ route('competency_assessment.save.employee_profile', ['employee' => $employee]) }}" class="card p-4">
        @csrf

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="employee_number" class="form-label">Employee Number</label>
                <input type="text" class="form-control" id="employee_number" value="{{ $employee->employee_id }}" name="employee_number" disabled>
            </div>

            <div class="col-md-4 mb-3">
                <label for="employee_firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="employee_firstname" value="{{ $employee->firstname }}" name="employee_firstname" disabled>
            </div>

            <div class="col-md-4 mb-3">
                <label for="employee_lastname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="employee_lastname" value="{{ $employee->lastname }}" name="employee_lastname" disabled>
            </div>
        </div>

        <!-- Repeated pattern for other form fields -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="employment_status" class="form-label">Employment Status</label>
                <select class="form-control form-select" id="employment_status" name="employment_status" required>
                    <option value="">Select Employment Status</option>
                    @foreach($employmentStatuses as $status)
                        <option value="{{ $status->id }}" {{ $status->id == $employee->employment_status_id ? 'selected' : '' }}>
                            {{ $status->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="job_level" class="form-label">Job Level</label>
                <select class="form-control form-select" id="job_level" name="job_level" required>
                    @foreach($jobLevels as $level)
                        <option value="{{ $level->id }}" {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                            {{ $level->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="last_review_date" class="form-label">Last Review Date</label>
                <input type="text" class="form-control" id="last_review_date" value="{{ $employee->last_review_at }}" name="last_review_date" required>
            </div>
        </div>
        <div class="form-group">
            <label for="functional_group">Functional Group</label>
            <select class="form-control form-select" id="functional_group" name="functional_group" disabled>
                @foreach($functionalGroups as $group)
                    <option value="{{ $group->id }}" {{ $group->id == $employee->functional_group_id ? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="bureau_office">Bureau/Office</label>
            <select class="form-control form-select" id="bureau_office" name="bureau_office" disabled>
                @foreach($bureauOffices as $office)
                    <option value="{{ $office->id }}" {{ $office->id == $employee->bureau_office_id ? 'selected' : '' }}>
                        {{ $office->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="division">Division</label>
            <select class="form-control form-select" id="division" name="division" disabled>
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}" {{ $division->id == $employee->division_id ? 'selected' : '' }}>
                        {{ $division->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="position">Position</label>
            <select class="form-control form-select" id="position" name="position" disabled>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}" {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                        {{ $position->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="immediate_supervisor" class="form-label">Immediate Supervisor</label>
                <input type="text" class="form-control" id="immediate_supervisor" value="{{ $employee->immediate_supervisor }}" name="immediate_supervisor" disabled>
            </div>
        </div>

        <div class="form-check mt-3">
            <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
            <label class="form-check-label" for="privacy_policy">I confirm that all of my profile information displayed above is accurate and correct.</label>
        </div>

        <div class="alert alert-warning mt-3">
            <i class="fa fa-exclamation-triangle"></i> If any of your profile information is incorrect, please DO NOT proceed to the Competency Assessment. Kindly report the error/s to the DTI COMPASS system administrators through the help desk widget found in the lower-left corner of the screen. You will be notified via email once your profile has been updated.
        </div>

        <div class="text-center mt-3">
            By clicking <strong>"Save and Continue"</strong>, you agree to the Data Privacy Policy and Terms of Use of this DTI COMPASS System.
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee]) }}" class="btn btn-secondary mt-2">Back</a>
            <button type="submit" class="btn btn-primary">Save and Continue</button>
        </div>
    </form>
</div>
@endsection
