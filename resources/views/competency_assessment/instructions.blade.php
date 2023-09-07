@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Directions</h1>
    <p>
        Using the rating scale below, please select the appropriate rating for each behavioral indicator that you are going to assess based on how you see yourself.
        Once you are done reading the guideline below, click "Continue" to proceed to the next page of this evaluation.
    </p>

    <h2>RATING SCALE</h2>
    <ul>
        <li>
            <strong>5 - EXCELLENT:</strong> The performance represents a high level of expertise, achievement, and commitment in terms of quality, quantity, and timeliness.
            The behavior is fully developed and demonstrated ALL THE TIME in performing the job.
        </li>
        <li>
            <strong>4 - VERY GOOD:</strong> The performance exceeded expectations; the behavior is developed and demonstrated MOST OF THE TIME in performing the job.
        </li>
        <li>
            <strong>3 - SATISFACTORY:</strong> The performance met expectations in terms of quality of work, efficiency, and timeliness.
            The behavior is developed and demonstrated FREQUENTLY in performing the job.
        </li>
        <li>
            <strong>2 - NEEDS IMPROVEMENT:</strong> The performance failed to meet expectations in terms of work, efficiency, and timeliness; the behavior is inadequate and demonstrated SOMETIMES in performing the job.
        </li>
        <li>
            <strong>1 - POOR:</strong> The behavior is underdeveloped; the performance was consistently below expectations and demonstrated RARELY OR ALMOST NEVER in performing the job.
        </li>
        <li>
            <strong>0 - INVALID:</strong> Does not exhibit the required behavioral performance at work.
        </li>
    </ul>

    <div class="mt-4">
        <a href="#" class="btn btn-primary">Continue</a>
    </div>
</div>
@endsection
