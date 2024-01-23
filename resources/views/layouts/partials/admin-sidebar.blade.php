<div id="adminSidebar" class="sidenav bg-light">
    <ul class="list-unstyled components">
        <!-- User Management -->
        <li class="nav-item">
            <a href="#userManagementSubmenu" data-bs-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle rounded fw-bold" aria-controls="userManagementSubmenu" aria-hidden="true">
                <i class="fas fa-users-cog"></i> User Management
            </a>
            <ul class="collapse list-unstyled" id="userManagementSubmenu">
                <li><a href="{{ route('users.index') }}"><i class="fas fa-user"></i> Users</a></li>
                <li><a href="{{ route('roles.index') }}"><i class="fas fa-user-tag"></i> Roles</a></li>
                <li><a href="{{ route('permissions.index') }}"><i class="fas fa-key"></i> Permissions</a></li>
            </ul>
        </li>

        <!-- Employee Management -->
        <li class="nav-item">
            <a href="#employeeManagementSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle rounded fw-bold">
                <i class="fas fa-briefcase"></i> Employee Management
            </a>
            <ul class="collapse list-unstyled" id="employeeManagementSubmenu">
                <li><a href="{{ route('employees.index') }}"><i class="fas fa-id-badge"></i> Employees</a></li>
                <li><a href="{{ route('functionalgroups.index') }}"><i class="fas fa-layer-group"></i> Functional Groups</a></li>
                <li><a href="{{ route('bureaus_offices.index') }}"><i class="fas fa-building"></i> Bureaus / Offices</a></li>
                <li><a href="{{ route('divisions.index') }}"><i class="fas fa-code-branch"></i> Division</a></li>
                <li><a href="{{ route('positions.index') }}"><i class="fas fa-user-md"></i> Position</a></li>
            </ul>
        </li>

        <!-- Competency Management -->
        <li class="nav-item">
            <a href="#competencyManagementSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle rounded fw-bold">
                <i class="fas fa-chart-line"></i> Competency Management
            </a>
            <ul class="collapse list-unstyled" id="competencyManagementSubmenu">
                <li><a href="{{ route('competency_categories.index') }}"><i class="fas fa-th-list"></i> Competency Categories</a></li>
                <li><a href="{{ route('competencies.index') }}"><i class="fas fa-tasks"></i> Competencies</a></li>
                <li><a href="{{ route('behavioral_indicators.index') }}"><i class="fas fa-tasks"></i> Behavioral Indicators</a></li>
                <li><a href="{{ route('competency_sets.index') }}"><i class="fas fa-boxes"></i> Competency Sets</a></li>
            </ul>
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