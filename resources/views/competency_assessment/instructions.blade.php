@extends('layouts.compass')

@section('compass-content')
<div class="container-fluid mt-2 p-5 bg-white rounded">
    @if(auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
    <h1 class="text-center">EMPLOYEE ASSESSMENT</h1>
    <div class="d-flex flex-row align-items-center justify-content-center pt-5">
        <div class="p-2 mx-4 mb-4git ">
            <img src="{{$employee->user->profile_pic ? asset('storage/images/images/' . $employee->user->profile_pic) : asset('images/user.png')}}" alt="Employee Avatar" class="employee-avatar">
        </div>
        <div class="card bg-light mb-4 px-5 pt-2">
            <div class="card-body my-checklist-card" >
                <div class="row">
                    <div class="col">
                        <div class="row" >
                            <div class="col"><p><strong>Name: </strong>{{$employee->firstname}} {{$employee->lastname}}</p></div>
                           
                        </div>
                        <div class="row">
                            
                            <div class="col"><p><strong>Email: </strong>{{$employee->email}}</p></div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col"><p><strong>Role: </strong>{{$employee->user->getRoleNames()->first()}}</p></div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col"><p><strong>Division: </strong>{{$employee->division->name}}</p></div>
                        </div>
                        
                    </div>
  
                </div>
            </div>
        </div>
        
    </div>
    <h1 class="text-center">INSTRUCTIONS</h1>
    <div class="text-center pt-4 pb-4">
        <p class="mb-3">Provided below are the competencies per category that are identified based on your staff's position and functions.</p>
        <p class="mb-4">Please rate per competency and the corresponding behaviors according to the frequency of demonstration and level of supervision.</p>
    </div>
    @else
    <h1 class="text-center">INSTRUCTIONS</h1>
    <div class="pt-4 pb-4">
        <p class="mb-3">Provided in the table below are the competencies per category that are identified based on your position and functions. Please rate per competency and the corresponding behaviors according to the frequency of demonstration and level of supervision using the rating scale presented in the previous page.</p>
        <p class="mb-4">To begin with the assessment, you can click on the pencil icon under the <strong>‘Action’</strong> column, or click on the <strong>‘Continue’</strong> button to proceed in the order that they appear in the table below. Should you need to pause, you can simply log back in, return to this page for your checklist, check the status in the table below, and click on the pencil icon to resume answering the competency forms that you have not yet completed.</p>
    </div>
    <h1 class="text-center text-dark">MY SELF-ASSESSMENT CHECKLIST</h1>
    @endif

    
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
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
                                $statusBadge = '<span class="badge bg-orange text-dark p-2 w-100 text-uppercase text-center"
                                        style="border-radius: 10px;">For Evaluation</span>';
                            } elseif ($completed < $total) {
                                $statusBadge = '<span class="badge bg-warning text-dark p-2 w-100 text-uppercase text-center"
                                        style="border-radius: 10px;">Continue</span>';
                            } elseif ($completed == $total) {
                                $statusBadge = '<span class="badge text-dark p-2 w-100 text-uppercase text-center"
                                        style="border-radius: 10px;background-color:#58D838;" >Completed</span>';
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
                                    class="btn btn-outline-default btn-sm text-white" style="background-color:#1E4387;">
                                    <i class="fa fa-pen" aria-hidden="true" ></i>
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
        <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}" class="btn btn-md mt-2 btn-outline-dark">Back</a>
        <form action="{{ route('competency_assessment.save.instructions', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" method="post" class="d-inline">
            @csrf
            @if ($competencyAssessmentItemsExist)
                <a href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => 1]) }}" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Continue</a>
            @else
                <button type="submit" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Continue</button>
            @endif
        </form>
    </div>
</div>
@include('auth.partials.privacy_policy')

@endsection
