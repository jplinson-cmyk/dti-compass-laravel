@extends('layouts.employee')
@section("content")

<div class="mt-2 mb-2">
    @php 
        $currentRouteName = Request::route()->getName();
        $currentCompetencyAssessment = $employee->competencyAssessments->where('session_type', $session_type)->first();
        $user = auth()->user();
        
    @endphp
   
    <div class="container-fluid">
        <ul class="compass-breadcrumb py-2 px-2 border-bottom">
        
            <li class="{{ $currentRouteName == 'competency_assessment.about' ? 'active' : '' }}"><a href="{{ route('competency_assessment.about', ['employee' => $employee, 'session_type' => $session_type]) }}">About COMPASS</a></li>
            <li class="{{ $currentRouteName == 'competency_assessment.dictionary' ? 'active' : '' }}"><a href="{{ route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => $session_type]) }}">Competency Dictionary</a></li>
            <li class="{{ $currentRouteName == 'competency_assessment.employee_profile' ? 'active' : '' }}"><a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}">Employee Profile</a></li>
            
            @if ($currentCompetencyAssessment)
                @if ($competencyAssessmentItemsExist)
                
                <li class="{{ $currentRouteName == 'competency_assessment.rating_scale' ? 'active' : '' }}"><a href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">COMPASS Rating Scale</a></li>
                <li class="{{ $currentRouteName == 'competency_assessment.instructions' ? 'active' : '' }}"><a href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">My Checklist</a></li>
                @else
                <li><a class="text-secondary" href="#">COMPASS Rating Scale</a></li>
                <li><a class="text-secondary" href="#">My Checklist</a></li>
                <li><a class="text-secondary" href="#">Core Competencies</a></li>
                <li><a class="text-secondary" href="#">Technical Competencies</a></li>
                <li><a class="text-secondary" href="#">Leadership Competencies</a></li>
                @endif
            @php
                
                $categoryIds = collect([]);
                if ($currentCompetencyAssessment) {
                    $categoryIds = $currentCompetencyAssessment->items->pluck('competencyCategoryId')->sort()->unique();
                    $categories = \App\Models\CompetencyCategory::whereIn('id', $categoryIds)->get()->keyBy('id');
                }
            @endphp
            @foreach ($categoryIds as $categoryId)
                @if (isset($categories[$categoryId]))
                    <li class="{{ $currentRouteName == 'competency_assessment.form' && Request::segment(7) == $categoryId ? 'active' : '' }}">
                        <a  href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id, 'categoryId' => $categoryId]) }}">
                            {{ $categories[$categoryId]->category_name }}
                        </a>
                    </li>
                @endif
            @endforeach
                @if ($competencyAssessmentCompleted)
                <li class="{{ $currentRouteName == 'competency_assessment.summary' || $currentRouteName == 'competency_assessment.summary' ? 'active' : '' }}"><a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Summary of Rating</a></li>
    
                <li class="{{ $currentRouteName == 'competency_assessment.cdp' || $currentRouteName == 'competency_assessment.cdp' ? 'active' : '' }}"><a href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Career Development</a></li>
    
                <li class="{{ $currentRouteName == 'competency_assessment.closing' || $currentRouteName == 'competency_assessment.closing' ? 'active' : '' }}"><a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">End of COMPASS</a></li>
                @else
                <li><a class="text-secondary" href="#">Summary of Rating</a></li>
                <li><a class="text-secondary" href="#">Career Development</a></li>
                <li><a class="text-secondary" href="#">End of COMPASS</a></li>
                @endif
            @else
            <li><a class="text-secondary" href="#">Rating Scale</a></li>
            <li><a class="text-secondary" href="#">Instructions</a></li>
            <li><a class="text-secondary" href="#">Core Competencies</a></li>
            <li><a class="text-secondary" href="#">Technical Competencies</a></li>
            <li><a class="text-secondary" href="#">Leadership Competencies</a></li>
            <li><a class="text-secondary" href="#">Summary of Rating</a></li>
            <li><a class="text-secondary" href="#">Career Development</a></li>
            <li><a class="text-secondary" href="#">End of COMPASS</a></li>
            @endif
    
            
        </ul>
        
    </div>
</div>
@yield('compass-content')
@endsection
