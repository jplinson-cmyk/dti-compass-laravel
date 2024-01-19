@extends('layouts.compass')

@section('compass-content')
<div class="container-fluid mt-2 p-5 bg-white rounded">
    <div class="text-center fw-bold">
        <img src="{!! url('/images/closing.png') !!}" alt="Login Illustration" class="img-fluid" style="max-width: 20%;">
        <p>Your response has been recorded. Rest assured that the information you provided will be treated confidentially.
        </p>
        <p>If you have completed your Competency Assessments and Career Development Plan, 
            you may log out or simply close this browser window.</p>
        <p>You can come back and log back into this platform to view your Summary of Rating 
            and continuously update your Career Development Plan.</p>
    </div>
</div>
@endsection
