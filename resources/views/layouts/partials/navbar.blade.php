<header class="p-3 bg-primary text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
                @auth
                    @role('admin')
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-2 text-white" data-bs-toggle="dropdown"
                                role="button" aria-expanded="false">User Management</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('users.index') }}" class="dropdown-item">Users</a></li>
                                <li><a href="{{ route('roles.index') }}" class="dropdown-item">Roles</a></li>
                                <li><a href="{{ route('roles_assign.index') }}" class="dropdown-item">Assign Roles</a></li>
                                <li><a href="{{ route('permissions.index') }}" class="dropdown-item">Permissions</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-2 text-white" data-bs-toggle="dropdown"
                                role="button" aria-expanded="false">Employee Management</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('employees.index') }}" class="dropdown-item">Employees</a></li>
                                <li><a href="#" class="dropdown-item">Assessors</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-2 text-white" data-bs-toggle="dropdown"
                                role="button" aria-expanded="false">Competency Management</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('competency_categories.index') }}" class="dropdown-item">Competency
                                        Categories</a></li>
                                <li><a href="{{ route('competencies.index') }}" class="dropdown-item">Competencies</a></li>
                                <li><a href="{{ route('behavioral_indicators.index') }}" class="dropdown-item">Behavioral Indicators</a></li>
                            </ul>
                        </li>
                    @endrole
                @endauth
            </ul>

            @auth
                {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}&nbsp;
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                </div>
            @endguest
        </div>
    </div>
</header>
