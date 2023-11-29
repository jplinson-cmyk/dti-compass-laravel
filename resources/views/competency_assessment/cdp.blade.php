@extends('layouts.compass')

@section('compass-content')
<div class="container mt-5">
    <h1 class="text-center mb-4">CAREER DEVELOPMENT PLAN</h1>
    <p class="text-center mb-4">
        The Career Development Plan is a tool to assist you to identify and develop your competencies toward achieving your career goals.
    </p>
    <p>
        Employee Name:
    </p>
 

    <div class="d-flex justify-content-between">
        <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}" class="btn btn-outline-primary mt-2">Back to Summary of Rating</a>
        <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}" class="btn btn-outline-primary mt-2">Save & Submit</a>
    </div>
</div>
@endsection
