@php
    $isSupervisor = auth()
        ->user()
        ->hasRole('supervisor');
    $userLoggedIn = auth()->user();
    $isDashboardPage = Request::is('employees/*/competency_assessments/employee_assessment/dashboard');
    $isProfilePage = Request::is('*/profile');
    $isEditProfilePage = Request::is('*/profile/*');
    $currentRoute = Request::route()->getName();
    $sessionType = request()->segment(4) ?? 'self_assessment';
@endphp


<div id="sidebar" class="sidenav bg-light">
    <ul class="list-unstyled components">
        @if (!$isDashboardPage && !$isProfilePage && !$isEditProfilePage)
            <li class="{{ Request::is('employees/' . $employee->id . '/competency_assessments*') ? 'active' : '' }}">
                @if ($sessionType === 'employee_assessment')
                    <p class="rounded fw-bolder mt-2 ps-2 text-secondary">Competency Assessment</p>
            <li>
                <a class="rounded fw-bolder "
                    href="{{ route('competency_assessment.about', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'self_assessment']) }}"><i
                        class="fa fa-file-alt" aria-hidden="true"></i> My
                    Assesssment
                    <i id="assessmentArrow" class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </li>

            <li class="active">
                <a class="rounded fw-bolder" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle" aria-controls="homeSubmenu"><i class="fa fa-user-tie"
                        aria-hidden="true"></i> Employee Assessments</a>
            </li>
        @else
            <p class="rounded fw-bolder mt-2 ps-2 text-secondary">Competency Assessment</p>
            <a class="rounded fw-bolder" id="myAssessment" href="#homeSubmenu" data-bs-toggle="collapse"
                aria-expanded="false" class="dropdown-toggle" aria-controls="homeSubmenu">
                <i class="fa fa-file-alt" aria-hidden="true"></i>
                My Assessment
                <i id="assessmentArrow" class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
        @endif
        <ul class="collapse list-unstyled show" id="homeSubmenu">
            <ul class="collapse show" id="assessmentSubmenn">
                <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.about', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                    <a class="rounded fw-bold myAssessmentLinks"
                        href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => $session_type]) }}"><i
                            class="fas fa-circle"></i> About COMPASS</a>
                </li>
                <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                    <a class="rounded fw-bold"
                        href="{{ route('competency_assessment.dictionary', ['employee' => $employee->id, 'session_type' => $session_type]) }}"><i
                            class="fas fa-circle"></i> Competency
                        Dictionary</a>
                </li>
                <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => $session_type]) ? 'active' : '' }}">
                    <a class="rounded fw-bold"
                        href="{{ route('competency_assessment.employee_profile', ['employee' => $employee->id, 'session_type' => $session_type]) }}"><i
                            class="fas fa-circle"></i> Employee
                        Profile</a>
                </li>
                @if ($currentCompetencyAssessment)
                    @if ($competencyAssessmentItemsExist)
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                            <a class="rounded fw-bold"
                                href="{{ route('competency_assessment.rating_scale', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                                    class="fas fa-circle"></i> COMPASS Rating Scale</a>
                        </li>
                        <li
                            class="list-unstyled {{ Request::routeIs('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                            <a class="rounded fw-bold"
                                href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                                    class="fas fa-circle"></i> My Checklist</a>
                        </li>
                    @else
                        <li class="list-unstyled">
                            <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i>
                                COMPASS Rating Scale</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> My
                                Checklist</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> Core
                                Competency</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i>
                                Technical Competency</a>
                        </li>
                        <li class="list-unstyled">
                            <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i>
                                Leadership Competency</a>
                        </li>
                    @endif
                    @php
                        $currentCategoryId = request()->route('categoryId');
                    @endphp
                    @foreach ($categoryIds as $categoryId)
                        @if (isset($categories[$categoryId]))
                            <li class="list-unstyled {{ $currentCategoryId == $categoryId ? 'active' : '' }}">
                                <a class="rounded fw-bold"
                                    href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id, 'categoryId' => $categoryId]) }}">
                                    <i class="fas fa-circle"></i> {{ $categories[$categoryId]->category_name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @else
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> Rating
                            Scale</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> My
                            Checklist</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> Core
                            Competencies</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i> Technical
                            Competencies</a>
                    </li>
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"></i>
                            Leadership Competencies</a>
                    </li>
                @endif
                @if ($competencyAssessmentCompleted)
                    <li
                        class="list-unstyled {{ Request::routeIs('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                        <a class="rounded fw-bold"
                            href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                                class="fas fa-circle" aria-hidden="true"></i> Summary of Rating</a>
                    </li>
                    <li
                        class="list-unstyled {{ Request::routeIs('competency_assessment.cdp', ['employee' => $employee->id, $session_type => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                        <a class="rounded fw-bold"
                            href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                                class="fas fa-circle" aria-hidden="true"></i> Career Development Plan
                        </a>
                    </li>
                @else
                    <li class="list-unstyled">
                        <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"
                                aria-hidden="true"></i> Summary of Rating</a>
                    </li>
                    <li class="list-unstyled fw-bold">
                        <a class="rounded text-secondary" href="#"><i class="fas fa-circle"
                                aria-hidden="true"></i> Career Development Plan
                        </a>
                    </li>
                @endif
            </ul>
            </li>

        </ul>
    @else
        <p class="rounded fw-bolder mt-2 ps-2 text-secondary">Competency Assessment</p>

        <li class="nav-item">
            <a class="rounded fw-bolder"
                href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}"><i
                    class="fa fa-file-alt" aria-hidden="true"></i> My
                Assessments</a>
        </li>
        @endif
        @if ($isSupervisor)
            <li
                class="{{ Request::routeIs('competency_assessment.employee_assessment', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'employee_assessment']) ? 'active' : '' }}">
                <a class="rounded fw-bolder"
                    href="{{ route('competency_assessment.employee_assessment', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'employee_assessment']) }}"><i
                        class="fa fa fa-user-tie" aria-hidden="true"></i> Employee
                    Assessments</a>
            </li>
        @endif
        <li class="nav-item">
            <a href="#" class="rounded fw-bolder"><i class="fa fa-user-check" aria-hidden="true"></i>
                Completed
                Assessments</a>
        </li>
    </ul>



</div>



<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow-lg rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{!! url('/images/dti-logo.ico') !!}" alt="" width="32" height="32">
        </a>
        <div class="d-sm-none d-md-block d-none d-sm-block">
            <span id="toggleButton"
                class="text-white rounded-circle d-inline-flex justify-content-center align-items-center "
                onclick="toggleNav()" style="cursor: pointer;">
                <i class="fas fa-arrow-left"></i>
            </span>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black"
                        href="{{ route('profile.index', ['user' => auth()->user()->id]) }}">
                        {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout.perform') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
