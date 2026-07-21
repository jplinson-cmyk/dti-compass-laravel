@extends('layouts.compass')
@php
    // Check if this page is for supervisor assessing an employee
    $isSupervisorMode = ($session_type == 'employee_assessment');

    // Check if this page is for employee editing their own profile
    $isEmployeeMode = ($session_type == 'self_assessment');

    function fieldAccess($canEdit) {
        return $canEdit ? '' : 'readonly';
    }

    function selectAccess($canEdit) {
    return $canEdit ? '' : 'style="pointer-events: none; background-color: #e9ecef;"';
    }

@endphp
@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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

      <form method="POST"
      action="{{ route('competency_assessment.save.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}"
      class="needs-validation card p-4" novalidate>

            @csrf

            <div class="row">
            <div class="col-md-12 mb-3">
                <p class="fw-bold">
                    Employee Number
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="This is the employee's unique identification number.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
                <input type="text" class="form-control" id="employee_number" value="{{ $employee->employee_id }}"
                    name="employee_number" disabled>
            </div>
        </div>

            <div class="row">
            <div class="col-md-12">
                <p class="fw-bold">
                    Employee Full Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="This section contains the employee's full legal name.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
            </div>
        </div>

      <div class="row">
            <div class="col-md-12 mb-3">
                <label for="employee_firstname" class="form-label fw-bolder">
                    First Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Enter the employee's given first name.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="employee_firstname"
                    value="{{ $employee->firstname }}"
                    name="employee_firstname" {!! fieldAccess($isEmployeeMode) !!} required>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="employee_middlename" class="form-label fw-bold">
                    Middle Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Enter the employee's middle name (if applicable).">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="employee_middlename" value="{{ $employee->middlename }}"
                    name="employee_middlename" {!! fieldAccess($isEmployeeMode) !!} required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="employee_lastname" class="form-label fw-bold">
                    Last Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Enter the employee's family or surname.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="employee_lastname" value="{{ $employee->lastname }}"
                    name="employee_lastname" {!! fieldAccess($isEmployeeMode) !!} required>
            </div>
        </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employee_suffix" class="form-label fw-bold">Name Extension (e.g. Jr., II, III)</label>
                    <input type="text" class="form-control" id="employee_suffix" value="{{ $employee->suffix }}"
                        name="employee_suffix" {!! fieldAccess($isEmployeeMode) !!}>
                </div>
            </div>

           <div class="row">
            <div class="col-md-12 mb-3">
                <label for="gender" class="form-label fw-bold">
                    Sex <span class="text-danger">*</span>
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Please select the employee's sex as indicated in official records.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <select class="form-control form-select" id="gender" name="gender" required {!! fieldAccess($isEmployeeMode) !!} required>
                    <option value="">Select</option>
                    <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
        </div>


            @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="employment_status" class="form-label fw-bold">
                        Employment Status <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select the employee's current type of employment, such as Regular, Probationary, or Contractual.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <select class="form-control form-select" id="employment_status" name="employment_status" {!! selectAccess($isSupervisorMode) !!} >
                        <option value="">Select Employment Status</option>
                        @foreach ($employmentStatuses as $status)
                            <option value="{{ $status->id }}" {{ $status->id == $employee->employment_status_id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="job_level" class="form-label fw-bold">
                        Job Level <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select the employee's current job level or rank within the organization (e.g., Rank-and-File, Supervisor, Manager).">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <select class="form-control form-select" id="job_level" name="job_level" {!! selectAccess($isSupervisorMode) !!}>
                        @foreach ($jobLevels as $level)
                            <option value="{{ $level->id }}" {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                                {{ $level->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            @else
           <div class="row">
                <div class="col-md-12 mb-3">
                    <p class="fw-bold">
                        Employment Status
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select the employee's current type of employment, such as Regular, Probationary, or Contractual.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </p>
                    <select class="form-control form-select" id="employment_status" name="employment_status" required {!! selectAccess($isSupervisorMode) !!}>
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
                    <p class="fw-bold">
                        Job Level
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select the employee's rank or classification within the organization, such as Rank-and-File, Supervisor, or Manager.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </p>
                    <select class="form-control form-select" id="job_level" name="job_level" required {!! selectAccess($isSupervisorMode) !!}>
                        @foreach ($jobLevels as $level)
                            <option value="{{ $level->id }}"
                                {{ $level->id == $employee->job_level_id ? 'selected' : '' }}>
                                {{ $level->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            @endif
            <div class="form-group mb-3">
                <p class="fw-bold">
                    Functional Group
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Select the department or division where the employee is functionally assigned.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
                <select class="form-control form-select" id="functional_group" name="functional_group" {!! selectAccess($isSupervisorMode) !!}>
                    @foreach ($functionalGroups as $group)
                        <option value="{{ $group->id }}"
                            {{ $group->id == $employee->functional_group_id ? 'selected' : '' }}>
                            {{ $group->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <p class="fw-bold">
                    Bureau/Office
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Select the specific bureau or office where the employee is officially assigned.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
                <select class="form-control form-select" id="bureau_office" name="bureau_office" {!! selectAccess($isSupervisorMode) !!}>
                    @foreach ($bureauOffices as $office)
                        <option value="{{ $office->id }}"
                            {{ $office->id == $employee->bureau_office_id ? 'selected' : '' }}>
                            {{ $office->name }}
                        </option>
                    @endforeach
                </select>
            </div>

           <div class="form-group mb-3">
                <p class="fw-bold">
                    Division
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Select the division within the Bureau/Office to which the employee belongs.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
                <select class="form-control form-select" id="division" name="division" {!! selectAccess($isSupervisorMode) !!}>
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
                <p class="fw-bold">
                    Position
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Select the employee's official job title or designation within the organization.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
                <select class="form-control form-select" id="position" name="position" {!! selectAccess($isSupervisorMode) !!}>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}"
                            {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                            {{ $position->name }}
                        </option>
                    @endforeach
                </select>
            </div>

           <div class="row">
            <div class="col-md-12">
                <p class="fw-bold">
                    Immediate Supervisor
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="This section displays the assigned supervisor's full name.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="immediate_supervisor_firstname" class="form-label fw-bolder">
                    First Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="The supervisor's given first name.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="immediate_supervisor_firstname"
                    value="{{ $employee->supervisors->first()->firstname ?? 'N/A' }}" name="immediate_supervisor_firstname" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="immediate_supervisor_middlename" class="form-label fw-bolder">
                    Middle Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="The supervisor's middle name, if applicable.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="immediate_supervisor_middlename"
                    value="{{ $employee->supervisors->first()->middlename ?? 'N/A' }}" name="immediate_supervisor_middlename" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="immediate_supervisor_lastname" class="form-label fw-bolder">
                    Last Name
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="The supervisor's family or surname.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="immediate_supervisor_lastname"
                    value="{{ $employee->supervisors->first()->lastname ?? 'N/A' }}" name="immediate_supervisor_lastname" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="immediate_supervisor_suffix" class="form-label fw-bolder">
                    Name Extension (e.g. Jr., II, III)
                    <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="This refers to generational suffixes such as Jr., Sr., II, or III.">
                        <i class="fa fa-question-circle"></i>
                    </button>
                </label>
                <input type="text" class="form-control" id="immediate_supervisor_suffix"
                    value="{{ $employee->supervisors->first()->suffix ?? 'N/A' }}" name="immediate_supervisor_suffix" readonly>
            </div>
        </div>



            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="last_review_date" class="form-label fw-bolder">
                        Date of Last Review
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Enter the date when the employee's performance or position was last reviewed.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <input type="date" class="form-control" id="last_review_date"
                        value="{{ \Carbon\Carbon::parse($employee->last_review_at)->format('Y-m-d') }}"
                        name="last_review_date" {!! fieldAccess($isSupervisorMode) !!}>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="disability" class="form-label fw-bold">
                        Are you a Person With Disability? <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Indicate if the employee has a disability as recognized by relevant authorities.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <select class="form-control form-select" id="disability" name="disability" required {!! fieldAccess($isEmployeeMode) !!} required>
                        <option value="">Select</option>
                        <option value="Yes" {{ $employee->disability == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ $employee->disability == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="indigenous" class="form-label fw-bold">
                        Do you belong to an Indigenous group or community? E.g. Mangyan, Manobo, Igorot, etc. <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select 'Yes' if you are a member of a recognized Indigenous group or community in the Philippines.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <select class="form-control form-select" id="indigenous" name="indigenous" required {!! fieldAccess($isEmployeeMode) !!} required>
                        <option value="">Select</option>
                        <option value="Yes" {{ $employee->indigenous == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ $employee->indigenous == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="ip_group" class="form-label fw-bold">
                        IP Group <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Specify the name of your Indigenous group or affiliation, e.g., Aeta, B'laan, Kankanaey.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <input type="text" class="form-control" id="ip_group" name="ip_group" value="{{ $employee->ip_group }}" {!! fieldAccess($isEmployeeMode) !!} required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="civil_status" class="form-label fw-bold">
                        Civil Status <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Select your current civil status such as Single, Married, Widowed, or Legally Separated.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <select class="form-control form-select" id="civil_status" name="civil_status" required {!! fieldAccess($isEmployeeMode) !!} required> 
                        <option value="">Select</option>
                        <option value="Single" {{ $employee->civil_status == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ $employee->civil_status == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Widowed" {{ $employee->civil_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                        <option value="Legally Separated" {{ $employee->civil_status == 'Legally Separated' ? 'selected' : '' }}>Legally Separated</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="religion" class="form-label fw-bold">
                        Religion <span class="text-danger">*</span>
                        <button type="button" class="btn btn-sm p-0 ms-1" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Enter your current religion or religious affiliation.">
                            <i class="fa fa-question-circle"></i>
                        </button>
                    </label>
                    <input type="text" class="form-control" id="religion" name="religion" value="{{ $employee->religion }}" {!! fieldAccess($isEmployeeMode) !!}>
                </div>
            </div>


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
                By clicking <strong>"Save"</strong>, you agree to the <span><a class="text-primary"
                        href="#">Data Privacy Policy</a></span> and <span><a class="text-primary"
                            href="#">Terms of Use</a></span> of
                this DTI COMPASS System.
            </div>

            <<div class="d-flex justify-content-between mt-4">
                <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => $session_type]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back</a>

                <div class="d-flex gap-2">
                    <!-- ✅ Always show Save and Continue -->
                    <button type="submit" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">
                        Save
                    </button>

                    <!-- ✅ Only show Next if items already exist -->
                    @if ($competencyAssessmentItemsExist)
                        <a href="{{ route('competency_assessment.rating_scale', [
                            'employee' => $employee->id,
                            'session_type' => $session_type,
                            'id' => $competencyAssessment->id
                        ]) }}" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">
                            Next
                        </a>
                    @endif
                </div>
            </div>


        </form>
    </div>
    @include('auth.partials.privacy_policy')

@endsection

@section('scripts')
<script>
(function () {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    forms.forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');

            // ✅ Auto-scroll to first invalid field
            const firstInvalid = form.querySelector(':invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalid.focus();
            }
        });

        // ✅ On input: hide error when field is filled
        form.querySelectorAll('input, select, textarea').forEach(function (field) {
            field.addEventListener('input', function () {
                if (field.checkValidity()) {
                    field.classList.remove('is-invalid');
                }
            });
        });
    });
})();
</script>
@endsection
