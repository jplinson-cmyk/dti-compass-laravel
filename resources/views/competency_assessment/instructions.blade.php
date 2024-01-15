@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        @if(auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
        <div class="mb-4">
            <h1 class="text-center">EMPLOYEE ASSESSMENT</h1>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p>Employee Name: {{$employee->firstname}} {{$employee->lastname}}</p>
                                </div>
                                <div class="col">
                                    <p>Email: {{$employee->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Position: {{$employee->position->name}}</p>
                                </div>
                                <div class="col">
                                    <p>Division:{{$employee->division->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <h1 class="text-center mb-4">INSTRUCTIONS</h1>
            <p class="mb-3">Provided in the table below are the competencies per category that are identified based on your
                position and functions. Please rate per competency and the corresponding behaviors according to the frequency of
                demonstration and level of supervision using the rating scale presented in the previous page.</p>
            <p class="mb-4">To begin with the assessment, you can click on the pencil icon under the <strong>‘Action’</strong> column, or click
                on the <strong>‘Continue’</strong> button to proceed in the order that they appear in the table below. Should you need to pause,
                you can simply log back in, return to this page for your checklist, check the status in the table below, and
                click on the pencil icon to resume answering the competency forms that you have not yet completed.</p>
        </div>
        <h2 class="text-center mb-3">MY SELF-ASSESSMENT CHECKLIST</h2>
        <div class="container table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr class="bg-light">
                        <th scope="col">Competency Cluster</th>
                        <th scope="col">Competency Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedAndSorted = $competencyAssessment->items
                            ->sortBy(function ($item) {
                                return $item->behavioralIndicator->competency->competencyCategory->category_name . ' ' . $item->behavioralIndicator->competency->name;
                            })
                            ->groupBy(function ($item) {
                                return $item->behavioralIndicator->competency->competencyCategory->category_name;
                            });
                    @endphp
        
                    @foreach ($groupedAndSorted as $categoryName => $items)
                        @foreach ($items->groupBy('behavioralIndicator.competency.name') as $competencyName => $competencyItems)
                            @php
                                $completed = $competencyItems->count() - $competencyItems->whereNull('score')->count();
                                $total = $competencyItems->count();
                                $percentage = ($completed / $total) * 100;
                                $statusBadge = '';
                                if ($completed == 0) {
                                    $statusBadge = '<span class="badge bg-warning text-dark">FOR EVALUATION</span>';
                                } elseif ($completed < $total) {
                                    $statusBadge = '<span class="badge bg-primary">CONTINUE</span>';
                                } elseif ($completed == $total) {
                                    $statusBadge = '<span class="badge bg-success">COMPLETE</span>';
                                }
                            @endphp
                            <tr>
                                <td>{{ str_replace('ies', 'y', $categoryName) }}</td>
                                <td id="competency-{{ $competencyItems->first()->behavioralIndicator->competency->id }}">
                                    {{ $competencyName }}
                                </td>
                                <td>{!! $statusBadge !!}</td>
                                @if (!$competencyAssessmentCompleted)
                                <td>
                                    <a href="{{ route('competency_assessment.form', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => $competencyItems->first()->behavioralIndicator->competency->competencyCategory->id]) }}#competency-{{ $competencyItems->first()->behavioralIndicator->competency->id }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-pen" aria-hidden="true"></i>
                                    </a>
                                </td>
                                @else
                                <td>
                                    <button class="btn btn-secondary btn-sm" disabled>
                                        <i class="fa fa-pen" aria-hidden="true"></i>
                                    </button>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        
        

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back</a>
            <form action="{{ route('competency_assessment.save.instructions', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" method="post"
                class="d-inline">
                @csrf

                @if ($competencyAssessmentItemsExist)
                    <a href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => 1]) }}"
                        class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Continue</a>
                @else
                    <button type="submit" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Continue</button>
                @endif
            </form>
        </div>
    </div>
@endsection
