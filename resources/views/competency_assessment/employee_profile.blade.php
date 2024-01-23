@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="container-fluid rounded p-4 mb-4 text-white" style="background-color: #1E4387;">
                <h6>
                    <strong>You are currently evaluating:</strong>
                    <span>
                        {{ $employee->firstname }} {{ $employee->lastname }}
                    </span>
                </h6>
                <h6>
                    <strong>Employee's Position:</strong>
                    <span>
                        {{ $employee->position->name }}
                    </span>
                    </strong>
                </h6>
            </div>
        @endif
        <h1 class="text-center mb-3">EMPLOYEE PROFILE</h1>
        <p class="text-center mb-4">Please provide all the required information below to complete the assessment profile.
        </p>

        <form method="post"
            action="{{ route('competency_assessment.save.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}"
            class="card p-4">
            @csrf

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employee_number" class="form-label fw-bold">Employee Number</label>
                    <input type="text" class="form-control" id="employee_number" value="{{ $employee->employee_id }}"
                        name="employee_number" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employee_firstname" class="form-label fw-bold">Employee First Name</label>
                    <input type="text" class="form-control" id="employee_firstname" value="{{ $employee->firstname }}"
                        name="employee_firstname" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employee_lastname" class="form-label fw-bold">Employee Last Name</label>
                    <input type="text" class="form-control" id="employee_lastname" value="{{ $employee->lastname }}"
                        name="employee_lastname" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employee_lastname" class="form-label fw-bold">Gender</label>
                    <input type="text" class="form-control" id="employee_lastname" value="{{ $employee->gender }}"
                        name="employee_lastname" disabled>
                </div>
            </div>
            @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employment_status" class="form-label">Employment Status</label>
                    <select class="form-control form-select" id="employment_status" name="employment_status" disabled>
                        <option value="">Select Employment Status</option>
                        @foreach ($employmentStatuses as $status)
                            <option value="{{ $status->id }}"
                                {{ $status->id == $employee->employment_status_id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="job_level" class="form-label">Job Level</label>
                    <select class="form-control form-select" id="job_level" name="job_level" disabled>
                        @foreach ($jobLevels as $level)
                            <option value="{{ $level->id }}"
                                {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                                {{ $level->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employment_status" class="form-label fw-bold">Employment Status</label>
                    <select class="form-control form-select" id="employment_status" name="employment_status" required>
                        <option value="">Select Employment Status</option>
                        @foreach ($employmentStatuses as $status)
                            <option value="{{ $status->id }}"
                                {{ $status->id == $employee->employment_status_id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="job_level" class="form-label fw-bold">Job Level</label>
                    <select class="form-control form-select" id="job_level" name="job_level" required>
                        @foreach ($jobLevels as $level)
                            <option value="{{ $level->id }}"
                                {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                                {{ $level->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
       
            <div class="form-group mb-3">
                <label for="functional_group" class="fw-bold">Functional Group</label>
                <select class="form-control form-select" id="functional_group" name="functional_group" disabled>
                    @foreach ($functionalGroups as $group)
                        <option value="{{ $group->id }}"
                            {{ $group->id == $employee->functional_group_id ? 'selected' : '' }}>
                            {{ $group->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="bureau_office" class="fw-bold">Bureau/Office</label>
                <select class="form-control form-select" id="bureau_office" name="bureau_office" disabled>
                    @foreach ($bureauOffices as $office)
                        <option value="{{ $office->id }}"
                            {{ $office->id == $employee->bureau_office_id ? 'selected' : '' }}>
                            {{ $office->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="division" class="fw-bold">Division</label>
                <select class="form-control form-select" id="division" name="division" disabled>
                    <option value="">None</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}"
                            {{ $division->id == $employee->division_id ? 'selected' : '' }}>
                            {{ $division->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group mb-3">
                <label for="position" class="fw-bold">Position</label>
                <select class="form-control form-select" id="position" name="position" disabled>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}"
                            {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                            {{ $position->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="immediate_supervisor" class="form-label fw-bold" >Name of Immediate Supervisor</label>
                    <input type="text" class="form-control" id="immediate_supervisor"
                        value="{{ $employee->immediate_supervisor }}" name="immediate_supervisor" disabled>
                </div>
            </div>
            @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="last_review_date" class="form-label">Date of Last Review</label>
                    <input type="text" class="form-control" id="last_review_date"
                        value="{{ $employee->last_review_at }}" name="last_review_date" disabled>
                </div>
            </div>
           
            @else
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="last_review_date" class="form-label fw-bold">Date of Last Review</label>
                    <input type="text" class="form-control" id="last_review_date"
                        value="{{ $employee->last_review_at }}" name="last_review_date" required>
                </div>
            </div>
            @endif

            <div class="form-check mt-2 mb-2">
                @if ($competencyAssessmentItemsExist)
                    <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" checked
                        disabled>
                    <label class="form-check-label" for="privacy_policy">I confirm that all of the profile information
                        displayed above are accurate and correct.</label>
                @else
                    <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                    <label class="form-check-label" for="privacy_policy">I confirm that all of the profile information
                        displayed above are accurate and correct.</label>
                @endif
            </div>

            <div class="alert alert-warning mt-3">
                <i class="fa fa-exclamation-triangle"></i> If any of your profile information is incorrect, please DO NOT
                proceed to the Competency Assessment. Kindly report the error/s to the DTI COMPASS system administrators
                through the help desk widget found in the lower-left corner of the screen. You will be notified via email
                once your profile has been updated.
            </div>

            <div class="text-center mt-3">
                By clicking <strong>"Save and Continue"</strong>, you agree to the <span><a class="text-primary"
                        href="#">Data Privacy Policy</a></span> and Terms of Use of
                this DTI COMPASS System.
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => $session_type]) }}"
                    class="btn btn-md mt-2 btn-outline-dark">Back</a>
                @if ($competencyAssessmentItemsExist)
                    <a href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                        class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Next</a>
                @else
                    <button type="submit" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Save and
                        Continue</button>
                @endif
            </div>
        </form>
    </div>
@endsection
