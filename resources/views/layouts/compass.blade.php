@extends('layouts.employee')

@section("content")
<div class="mt-4 mb-3">
    @php 
        $currentRouteName = Request::route()->getName();
    @endphp

    <ul class="compass-breadcrumb py-2 border-bottom">
        
        <li class="{{ $currentRouteName == 'competency_assessment.about' ? 'active' : '' }}"><a href="{{ route('competency_assessment.about', ['employee' => $employee->id]) }}">About</a></li>
        <li class="{{ $currentRouteName == 'competency_assessment.dictionary' ? 'active' : '' }}"><a href="{{ route('competency_assessment.dictionary', ['employee' => $employee->id]) }}">Competency Dictionary</a></li>
        <li class="{{ $currentRouteName == 'competency_assessment.employee_profile' ? 'active' : '' }}"><a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee->id]) }}">Employee Profile</a></li>

        @if ($employee->competencyAssessments->isNotEmpty())
            @if ($competencyAssessmentItemsExist)

            <li class="{{ $currentRouteName == 'competency_assessment.rating_scale' ? 'active' : '' }}"><a href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Rating Scale</a></li>
            <li class="{{ $currentRouteName == 'competency_assessment.instructions' ? 'active' : '' }}"><a href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Instructions</a></li>
            @endif
        @php
            $currentAssessment = $employee->competencyAssessments->first();
            $categoryIds = collect([]);
            if ($currentAssessment) {
                $categoryIds = $currentAssessment->items->pluck('competencyCategoryId')->sort()->unique();
                $categories = \App\Models\CompetencyCategory::whereIn('id', $categoryIds)->get()->keyBy('id');
            }
        @endphp
        @foreach ($categoryIds as $categoryId)
            @if (isset($categories[$categoryId]))
                <li class="{{ $currentRouteName == 'competency_assessment.form' && Request::segment(6) == $categoryId ? 'active' : '' }}">
                    <a  href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'id' => $currentAssessment->id, 'categoryId' => $categoryId]) }}">
                        {{ $categories[$categoryId]->category_name }}
                    </a>
                </li>
            @endif
        @endforeach
            @if ($competencyAssessmentCompleted)
            <li class="{{ $currentRouteName == 'competency_assessment.summary' || $currentRouteName == 'competency_assessment.summary' ? 'active' : '' }}"><a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Summary of Rating</a></li>

            <li class="{{ $currentRouteName == 'competency_assessment.cdp' || $currentRouteName == 'competency_assessment.cdp' ? 'active' : '' }}"><a href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">Career Development Plan</a></li>

            <li class="{{ $currentRouteName == 'competency_assessment.closing' || $currentRouteName == 'competency_assessment.closing' ? 'active' : '' }}"><a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id]) }}">End of COMPASS</a></li>
            @else

            @endif
        @endif
        
    </ul>
</div>
@yield('compass-content')
@endsection
