<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="/" class="navbar-brand">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home.index') }}" class="nav-link text-white">Home</a>
                </li>
                @auth
                    @role('admin')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                User Management
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.index') }}" class="dropdown-item">Users</a></li>
                                <li><a href="{{ route('roles.index') }}" class="dropdown-item">Roles</a></li>
                                <li><a href="{{ route('permissions.index') }}" class="dropdown-item">Permissions</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                Employee Management
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('employees.index') }}" class="dropdown-item">Employees</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                Competency Management
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('competency_categories.index') }}" class="dropdown-item">Competency
                                        Categories</a></li>
                                <li><a href="{{ route('competencies.index') }}" class="dropdown-item">Competencies</a></li>
                                <li><a href="{{ route('behavioral_indicators.index') }}" class="dropdown-item">Behavioral
                                        Indicators</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                                Competency Assessment
                            </a>
                            <ul class="dropdown-menu">
                                @if (isset($employee))
                                    <li><a href="{{ route('competency_assessment.about', ['employee' => $employee]) }}"
                                            class="dropdown-item">About</a></li>
                                    <li><a href="{{ route('competency_assessment.dictionary', ['employee' => $employee]) }}"
                                            class="dropdown-item">Competency Dictionary</a></li>
                                    <li><a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee]) }}"
                                            class="dropdown-item">Employee Profile</a></li>
                                    <li><a href="{{ route('competency_assessment.instructions', ['employee' => $employee]) }}"
                                            class="dropdown-item">Instructions</a></li>
                                    <li><a href="{{ route('competency_assessment.core_competency', ['employee' => $employee]) }}"
                                            class="dropdown-item">Core Competency</a></li>
                                    <li><a href="{{ route('competency_assessment.technical_competency', ['employee' => $employee]) }}"
                                            class="dropdown-item">Technical Competency</a></li>
                                    <li><a href="{{ route('competency_assessment.leadership_competency', ['employee' => $employee]) }}"
                                            class="dropdown-item">Leadership Competency</a></li>
                                    <li><a href="{{ route('competency_assessment.summary', ['employee' => $employee]) }}"
                                            class="dropdown-item">Summary of Rating</a></li>
                                @else
                                    <li><a href="#" class="dropdown-item disabled">Please enter the employee id in the url "competency-assessment/employeeid/about"</a></li>
                                @endif
                            </ul>
                        </li>
                    @endrole
                @endauth
            </ul>

            @auth
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('profile.index') }}" class="nav-link text-white">{{ auth()->user()->firstname }}
                            {{ auth()->user()->lastname }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout.perform') }}" class="btn btn-outline-light">Logout</a>
                    </li>
                </ul>
            @endauth

            @guest
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('login.perform') }}" class="btn btn-outline-light">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register.perform') }}" class="btn btn-warning ml-2">Sign-up</a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
