@extends('layouts.app-master')

@section('content')
<div class="container">
    <h2>Employee Profile</h2>
    
    <form method="post" action="#"> {{-- Replace '#' with your actual route --}}
        @csrf {{-- Add a CSRF token for security --}}
        
        <div class="form-group">
            <label for="employee_name">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name" disabled>
        </div>
        
        <div class="form-group">
            <label for="employee_number">Employee Number</label>
            <input type="text" class="form-control" id="employee_number" name="employee_number" disabled>
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
        
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy">
            <label class="form-check-label" for="privacy_policy">By clicking "Continue", you agree to the Data Privacy Policy of the DTI Academy Learning Management System</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
@endsection
