@extends('layouts.app-master')

@section('content')
<div class="container">
    <h2 class="text-center">EMPLOYEE PROFILE</h2>
    <p class="text-center">Please provide all the required information below to complete your assessment profile.</p>

    
    <form method="post" action="#"> {{-- Replace '#' with your actual route --}}
        @csrf {{-- Add a CSRF token for security --}}

        <div class="form-group">
            <label for="employee_number">Employee Number</label>
            <input type="text" class="form-control" id="employee_number" name="employee_number" disabled>
        </div>

        <div class="form-group">
            <label for="employee_name">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name" disabled>
        </div>
        
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" disabled>
        </div>
        
        <div class="form-group">
            <label for="employment_status">Employment Status</label>
            <input type="text" class="form-control" id="employment_status" name="employment_status" disabled>
        </div>
        
        <div class="form-group">
            <label for="job_level">Job Level</label>
            <input type="text" class="form-control" id="job_level" name="job_level" disabled>
        </div>
        
        <div class="form-group">
            <label for="functional_group">Functional Group</label>
            <input type="text" class="form-control" id="functional_group" name="functional_group" disabled>
        </div>
        
        <div class="form-group">
            <label for="bureau_office">Bureau/Office</label>
            <input type="text" class="form-control" id="bureau_office" name="bureau_office" disabled>
        </div>
        
        <div class="form-group">
            <label for="division">Division</label>
            <input type="text" class="form-control" id="division" name="division" disabled>
        </div>
        
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" disabled>
        </div>
        
        <div class="form-group">
            <label for="supervisor_name">Name of Immediate Supervisor</label>
            <input type="text" class="form-control" id="supervisor_name" name="supervisor_name" disabled>
        </div>
        
        <div class="form-group">
            <label for="last_review_date">Date of Last Review</label>
            <input type="text" class="form-control" id="last_review_date" name="last_review_date" disabled>
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
            <a href="{{ route('competency_assessment.dictionary') }}" class="btn btn-light float-left mt-2">Back</a>

            <a href="{{ route('competency_assessment.rating_scale') }}" class="btn btn-primary float-right mt-2">Save and Continue</a>
        </div>  
</div>
@endsection
