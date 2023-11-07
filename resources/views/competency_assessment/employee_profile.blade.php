@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1 class="text-center">EMPLOYEE PROFILE</h1>
    <p class="text-center">Please provide all the required information below to complete your assessment profile.</p>

    
    <form method="post" action="#"> {{-- Replace '#' with your actual route --}}
        @csrf {{-- Add a CSRF token for security --}}

        <div class="form-group">
            <label for="employee_number">Employee Number</label>
            <input type="text" class="form-control" id="employee_number" value="{{ $employee->employee_id }}" name="employee_number" disabled>
        </div>

        <div class="form-group">
            <label for="employee_firstname">FirstName</label>
            <input type="text" class="form-control" id="employee_firstname" value="{{ $employee->firstname }}" name="employee_firstname" disabled>
        </div>

        <div class="form-group">
            <label for="employment_status">Employment Status</label>
            <select class="form-control form-select" id="employment_status" name="employment_status">
                <option value="">Select Employment Status</option>
                @foreach($employmentStatuses as $status)
                    <option value="{{ $status->id }}" {{ $status->id == $employee->employment_status_id ? 'selected' : '' }}>
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="job_level">Job Level</label>
            <select class="form-control form-select" id="job_level" name="job_level">
                @foreach($jobLevels as $level)
                    <option value="{{ $level->id }}" {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                        {{ $level->name }}
                    </option>
                @endforeach
            </select>
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
        
        <div class="form-group">
            <label for="immediate_supervisor">Immediate Supervisor</label>
            <input type="text" class="form-control" id="immediate_supervisor" value="{{ $employee->immediate_supervisor }}" name="immediate_supervisor" disabled>
        </div>

        <div class="form-group">
            <label for="last_review_date">Last Review Date</label>
            <input type="text" class="form-control" id="last_review_date" value="{{ $employee->last_review_at }}" name="last_review_date">
        </div>
        
        <div class="form-group form-check mt-2">
            <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy">
            <label class="form-check-label" for="privacy_policy">I confirm that all of my profile information displayed above are accurate and correct.</label>
        </div>

        <div class="form-group mt-2">
            <label class="form-check-label" for="privacy_policy"><i class="fa fa-exclamation-triangle"></i> If any of your profile information is incorrect, please DO NOT proceed to the Competency Assessment. Kindly report the error/s to the DTI COMPASS system administrators through the help desk widget found in the lower-left corner of the screen. You will be notified via email once your profile has been updated.</label>
        </div>
        <div class="form-group text-center mt-2">
            <label for="privacy_policy">By clicking <strong>"Save and Continue"</strong>, you agree to the Data Privacy Policy and Terms of Use of this DTI COMPASS System.</label>
        </div>

        <div class="form-group">
            <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee]) }}" class="btn btn-light float-left mt-2">Back</a>

            <a href="{{ route('competency_assessment.rating_scale', ['employee' => $employee]) }}" class="btn btn-primary float-right mt-2">Save and Continue</a>
        </div>  
</div>
@endsection
