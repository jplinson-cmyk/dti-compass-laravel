@extends('layouts.compass')

@section('compass-content')
<div class="container my-5">
    <h1 class="text-center mb-4">INSTRUCTIONS</h1>
    <p class="mb-3">Provided in the table below are the competencies per category that are identified based on your position and functions. Please rate per competency and the corresponding behaviors according to the frequency of demonstration and level of supervision using the rating scale presented in the previous page.</p>
    <p class="mb-4">To begin with the assessment, you can click on the pencil icon under the ‘Action’ column, or click on the ‘Continue’ button to proceed in the order that they appear in the table below. Should you need to pause, you can simply log back in, return to this page for your checklist, check the status in the table below, and click on the pencil icon to resume answering the competency forms that you have not yet completed.</p>

    <h2 class="text-center mb-3">MY SELF-ASSESSMENT CHECKLIST</h2>
    <div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Category / Cluster</th>
                    <th scope="col">Competency Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competencyAssessment->items->groupBy(function($item){ 
                            return $item->behavioralIndicator->competency_id; 
                            }) as $key => $items)
                    <tr>
                        <td>{{ $items->first()->behavioralIndicator->competency->competencyCategory->category_name }}</td>
                        <td id="competency-{{ $items->first()->behavioralIndicator->competency->id }}">
                            {{ $items->first()->behavioralIndicator->competency->name }}
                        </td> 
                        <td>{{ $items->count() - $items->whereNull('score')->count() }} / {{ $items->count() }}</td>  
                        <td>
                            <a href="{{ route('competency_assessment.form', ['employee' => $employee, 'id' => $competencyAssessment->id, 'categoryId' => $items->first()->behavioralIndicator->competency->competencyCategory->id ]) }}#competency-{{ $items->first()->behavioralIndicator->competency->id }}" class="btn btn-outline-primary">
                                <i class="fa fa-pen" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee]) }}" class="btn btn-outline-secondary">Back</a>
        <form action="{{ route('competency_assessment.save.instructions', ['employee' => $employee]) }}" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Continue</button>
        </form>
    </div>
</div>
@endsection
