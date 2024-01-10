@extends('layouts.compass')

@section('compass-content')
<div class="container-fluid mt-2 p-5 bg-light rounded">
    <h1 class="text-center mb-4">END OF COMPASS</h1>
    <p class="text-center mb-4">Your response has been recorded. Rest assured that the information you provided will be treated confidentially.
    </p>
    <p class="text-center mb-4">
        If you have completed your Competency Assessments and Career Development Plan, 
        you may log out or simply close this browser window.
    </p>
    <p class="text-center mb-4">
        You can come back and log back into this platform to view your Summary of Rating 
        and continuously update your Career Development Plan.
    </p>

    <div class="d-flex justify-content-between">
        
        <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-outline-primary mt-2">View Summary of Rating</a>
        <a href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-outline-primary mt-2">Manage Career Development Plan</a>

    </div>
</div>
@endsection
