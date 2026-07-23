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
            <li class="list-unstyled">
                <a class="rounded fw-bolder sidebar-header-text"
                    href="{{ route('competency_assessment.about', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'self_assessment']) }}"><i
                        class="fa fa-file-alt" aria-hidden="true"></i> My
                    Assesssment
                    <i id="assessmentArrow" class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </li>

            <li class="active">
                <a class="rounded fw-bolder sidebar-header-text" href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle" aria-controls="homeSubmenu"><i class="fa fa-user-tie"
                        aria-hidden="true"></i> Employee Assessments</a>
            </li>
        @else
            <li class="list-unstyled">
                <p class="rounded fw-bolder mt-2 ps-2 text-secondary">Competency Assessment</p>
            </li>
            <li class="list-unstyled">
                <a class="rounded fw-bolder sidebar-header-text" id="myAssessment" href="#homeSubmenu" data-bs-toggle="collapse"
                    aria-expanded="false" class="dropdown-toggle" aria-controls="homeSubmenu">
                    <i class="fa fa-file-alt" aria-hidden="true"></i>
                    My Assessment
                    <i id="assessmentArrow" class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        <ul class="collapse list-unstyled show" id="homeSubmenu">
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
            </ul>
                 <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.pdap', ['employee' => $employee->id, $session_type => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                    <a class="rounded fw-bolder sidebar-header-text"
                        href="{{ route('competency_assessment.pdap', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                            class="fa fa-file-alt" aria-hidden="true"></i> Professional Development Action Plan
                    </a>
                </li>
                <li
                    class="list-unstyled {{ Request::routeIs('competency_assessment.cdp', ['employee' => $employee->id, $session_type => 'self_assessment', 'id' => $currentCompetencyAssessment->id]) ? 'active' : '' }}">
                    <a class="rounded fw-bolder sidebar-header-text"
                        href="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $currentCompetencyAssessment->id]) }}"><i
                            class="fa fa-file-alt" aria-hidden="true"></i> Career Development Plan
                    </a>
                </li>
            @else
                <li class="list-unstyled">
                    <a class="rounded text-secondary fw-bold" href="#"><i class="fas fa-circle"
                            aria-hidden="true"></i> Summary of Rating</a>
                </li>
            </ul>
        
            <li class="list-unstyled">
                    <a class="rounded fw-bolder sidebar-header-text" href="#"><i class="fa fa-file-alt"
                            aria-hidden="true"></i> Professional Development Action Plan
                    </a>
                </li>
                
                <li class="list-unstyled">
                    <a class="rounded fw-bolder sidebar-header-text" href="#"><i class="fa fa-file-alt"
                            aria-hidden="true"></i> Career Development Plan
                    </a>
                </li>
            @endif

        
        @else
        <p class="rounded fw-bolder mt-2 ps-2 text-secondary ">Competency Assessment</p>

        <li>
            <a class="rounded fw-bolder sidebar-header-text"
                href="{{ route('competency_assessment.about', ['employee' => $employee->id, 'session_type' => 'self_assessment']) }}"><i
                    class="fa fa-file-alt" aria-hidden="true"></i> My
                Assessment</a>
        </li>
        @endif
        @if ($isSupervisor)
            <li
                class="{{ Request::routeIs('competency_assessment.employee_assessment', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'employee_assessment']) ? 'active' : '' }}">
                <a class="rounded fw-bolder sidebar-header-text"
                    href="{{ route('competency_assessment.employee_assessment', ['employee' => $userLoggedIn->userable_id, 'session_type' => 'employee_assessment']) }}"><i
                        class="fa fa fa-user-tie" aria-hidden="true"></i> Employee
                    Assessments</a>
            </li>
        @endif
        <li>
            <a href="#" class="rounded fw-bolder sidebar-header-text"><i class="fa fa-user-check" aria-hidden="true"></i>
                Completed
                Assessments</a>
        </li>
    </ul>



</div>



<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow-lg rounded">
    <div class="container-fluid">
        <div class="navbar-brand" href="#">
            <img src="{!! url('/images/bagong_pilipinas.png') !!}" alt="" width="auto" height="50">
        </div>
        <div class="d-sm-none d-md-block d-none d-sm-block">
            <span id="toggleButton"
                class="text-white rounded-circle d-inline-flex justify-content-center align-items-center"
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex no-arrow align-items-center mx-4" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ auth()->user()->profile_pic ? asset('storage/images/images/' . auth()->user()->profile_pic) : asset('images/user.png') }}" class="rounded-circle me-2 mx-4" width="40" height="40" alt="User">
                        <div class="user-info mx-4">
                            <div class="fw-bold">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</div>
                            <div class="text-muted">{{ auth()->user()->roles->first()->name }}</div>
                        </div>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile.index', ['user' => auth()->user()->id]) }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


