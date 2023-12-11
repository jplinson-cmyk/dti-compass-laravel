@php
    $isSupervisor = auth()
        ->user()
        ->hasRole('supervisor');
    $userLoggedIn = auth()->user();
    $isDashboardPage = Request::is('employees/*/competency_assessments/employee_assessment/dashboard');
    $currentRoute = Request::route()->getName();
    $sessionType = request()->segment(4) ?? 'self_assessment';
@endphp


<div id="sidebar" class="sidenav">
    <ul class="list-unstyled components">

        @if (!$isDashboardPage)
            <li class="{{ Request::is('employees/' . $employee->id . '/competency_assessments*') ? 'active' : '' }}">
                @if ($sessionType === 'employee_assessment')
                    <a class="rounded"
                        href="{{ route('competency_assessment.about', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'self_assessment']) }}">My
                        Assesssment</a>

                    <a class="rounded" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle" aria-controls="homeSubmenu">Employee Assessment</a>
                @else
                    <a class="rounded" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle" aria-controls="homeSubmenu">My Assessment</a>
                @endif
                <ul class="collapse list-unstyled show" id="homeSubmenu">
                    <li>
                        <ul class="collapse show" id="assessmentSubmenn">
                            <li
                                class="list-unstyled {{ Request::routeIs('competency_assessment.about', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                                <a class="rounded"
                                    href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => $session_type]) }}">About</a>
                            </li>
                            <li
                                class="list-unstyled {{ Request::routeIs('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                                <a class="rounded"
                                    href="{{ route('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => $session_type]) }}">Competency
                                    Dictionary</a>
                            </li>
                            <li
                                class="list-unstyled {{ Request::routeIs('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                                <a class="rounded"
                                    href="{{ route('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => $session_type]) }}">Employee
                                    Profile</a>
                            </li>
                            @if ($currentCompetencyAssessment)
                                @if ($competencyAssessmentItemsExist)
                                    <li
                                        class="list-unstyled {{ Request::routeIs('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Rating
                                            Scale</a>
                                    </li>
                                    <li
                                        class="list-unstyled {{ Request::routeIs('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Instructions</a>
                                    </li>
                                @endif

                                @php

                                    $currentCategoryId = request()->route('categoryId');
                                @endphp
                                @foreach ($categoryIds as $categoryId)
                                    @if (isset($categories[$categoryId]))
                                        <li
                                            class="list-unstyled {{ $currentCategoryId == $categoryId ? 'active' : '' }}">
                                            <a class="rounded"
                                                href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id, 'categoryId' => $categoryId]) }}">
                                                {{ $categories[$categoryId]->category_name }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                        </ul>
                    </li>
                    @if ($competencyAssessmentCompleted)
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                            <a class="rounded"
                                href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Rating
                                Summary</a>
                        </li>
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.cdp', ['employee' => $employee->id, $session_type => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                            <a class="rounded"
                                href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Career
                                Development Plan
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
        @endif
    @else
        <li class="nav-item">
            <a class="rounded"
                href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}">My
                Assessment</a>
        </li>
        @endif
        @if ($isSupervisor)
            <li
                class="{{ Request::routeIs('competency_assessment.employee_assessment', ['employee' => $employee->id, 'session_type' => 'employee_assessment']) ? 'active' : '' }}">
                <a class="rounded"
                    href="{{ route('competency_assessment.employee_assessment', ['employee' => $employee->id, 'session_type' => 'employee_assessment']) }}">Employee
                    Assessment</a>
            </li>
        @endif

    </ul>



</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{!! url('/images/dti-logo.ico') !!}" alt="" width="32" height="auto">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('profile.index') }}">{{ auth()->user()->firstname }}
                        {{ auth()->user()->lastname }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout.perform') }}">Logout</a>
                </li>
                <div class="competency-assessment-links">
                    <li
                        class="nav-item {{ Request::is('employees/' . $employee->id . '/competency_assessments') ? 'active' : '' }}">
                        <a class="rounded" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle" aria-controls="homeSubmenu">My Assessment</a>
                        <ul class="collapse list-unstyled show" id="homeSubmenu">
                            <li class="nav-item">
                                <ul class="collapse show" id="assessmentSubmenn">
                                    <li
                                        class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.about', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }} ">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}">About</a>
                                    </li>
                                    <li
                                        class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => 'self_assessment']) ? 'active' : '' }}">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}">Competency
                                            Dictionary</a>
                                    </li>
                                    <li
                                        class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => 'self_assessment']) ? 'active' : '' }}">
                                        <a class="rounded"
                                            href="{{ route('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}">Employee
                                            Profile</a>
                                    </li>
                                    @if ($currentCompetencyAssessment)
                                        @if ($competencyAssessmentItemsExist)
                                            <li
                                                class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                                <a class="rounded"
                                                    href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Rating
                                                    Scale</a>
                                            </li>
                                            <li
                                                class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                                <a class="rounded"
                                                    href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}">Instructions</a>
                                            </li>
                                        @endif

                                        @php
                                            $currentCategoryId = request()->route('categoryId');
                                        @endphp
                                        @foreach ($categoryIds as $categoryId)
                                            @if (isset($categories[$categoryId]))
                                                <li
                                                    class="nav-item list-unstyled {{ $currentCategoryId == $categoryId ? 'active' : '' }}">
                                                    <a class="rounded"
                                                        href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id, 'categoryId' => $categoryId]) }}">
                                                        {{ $categories[$categoryId]->category_name }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                </ul>
                            </li>
                            @if ($competencyAssessmentCompleted)
                                <li
                                    class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                    <a class="rounded"
                                        href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => 'self_assessment', 'id' => $employee->competencyAssessments->first()->id]) }}">Rating
                                        Summary</a>
                                </li>
                                <li
                                    class="nav-item list-unstyled {{ Request::routeIs('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                                    <a class="rounded"
                                        href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $employee->competencyAssessments->first()->id]) }}">Career
                                        Development Plan</a>
                                </li>
                            @endif
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item"><a class="rounded" href="#">Assessment History</a></li>

                    @if (auth()->user()->hasRole('supervisor'))
                        <li class="nav-item"><a class="rounded" href="#">Employee Assessment</a></li>
                    @endif

                </div>
            </ul>
        </div>
    </div>
</nav>
