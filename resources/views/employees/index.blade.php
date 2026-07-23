@extends('layouts.app-master')

@section('content')
    <div class="container-fluid mt-4 p-5 bg-white rounded">
        <h1 class="text-center mb-4">EMPLOYEE MANAGEMENT</h1>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <!-- Import and Export Buttons -->
        <div class="row mb-4">
            <div class="col">
                <div class="float-end">
                    <div class="accordion" id="exportAccordion" style="width: 180px;">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="exportHeading">
                                <button class="accordion-button collapsed py-2" type="button" data-bs-toggle="collapse" data-bs-target="#exportCollapse" aria-expanded="false"aria-controls="exportCollapse">Export As</button>
                            </h2>

                            <div id="exportCollapse" class="accordion-collapse collapse" aria-labelledby="exportHeading" data-bs-parent="#exportAccordion">
                                <div class="accordion-body d-flex gap-2 justify-content-center">
                                    <a href="{{ route('employees.export.pdf') }}" class="btn btn-sm text-white" style="background-color: #1E4387;">PDF</a>
                                    <a href="{{ route('employees.export.csv') }}" class="btn btn-sm text-white" style="background-color: #1E4387;">CSV</a>
                                    <a href="{{ route('employees.export.xls') }}" class="btn btn-sm text-white" style="background-color: #1E4387;">XLS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Add User Buttons -->
        <div class="d-flex justify-content-between align-items-center mb-2 gap-3">
            {{-- Search Form --}}
            <form method="GET" action="{{ route('employees.index') }}" id="searchForm">
                <div class="input-group" style="width: 350px;">
                    <input type="text" class="form-control" name="searchEmployee" placeholder="Search..." value="{{ request('searchEmployee') }}"id="searchInput">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                    <button type="button" class="btn btn-outline-secondary" id="cancelButton" style="display: {{ request('searchEmployee') ? 'inline-block' : 'none' }};">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </form>

            {{-- Import and Add Employee Buttons --}}
            <div class="d-flex align-items-center gap-2">
                <form method="POST" action="{{ route('employees.import') }}" enctype="multipart/form-data" id="importEmployeesForm" class="m-0">
                    @csrf
                    <input type="file" name="import_file" id="importEmployeeFile" accept=".csv,.xls,.xlsx" class="d-none" required>
                    <button type="button" class="btn btn-sm text-white" style="background-color: #1E4387;" onclick="document.getElementById('importEmployeeFile').click();">
                        <i class="fa fa-upload"></i> Import
                    </button>
                </form>

                <a href="{{ route('employees.create') }}" class="btn btn-sm text-white" style="background-color: #1E4387;">
                    <i class="fa fa-plus"></i> Add Employee
                </a>
            </div>
        </div>

        {{-- Bulk Password Reset Form --}}
        <form method="POST" action="{{ route('employees.bulk-reset') }}">
            @csrf

            <div class="overflow-auto">
                <table class="table table-striped bdr table-bordered table-responsive mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Employee Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Position</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>
                                    @if ($employee->user)
                                        <input type="checkbox" name="employee_ids[]" value="{{ $employee->id }}">
                                    @endif
                                </td>

                                <td>{{ $employee->employee_id }}</td>
                                <td>{{ $employee->firstname }}</td>
                                <td>{{ $employee->lastname }}</td>
                                <td>{{ $employee->position->name }}</td>

                                <td>
                                    <div class="btn-group dropstart">
                                        <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton{{ $employee->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $employee->id }}">
                                            <li><a class="dropdown-item" href="{{ route('employees_supervisors.tags.index', $employee->id) }}">Manage Supervisees</a></li>
                                            <li><a class="dropdown-item" href="{{ route('employees.show', $employee->id) }}">View Profile</a></li>
                                            <li><a class="dropdown-item" href="{{ route('employees.edit', $employee->id) }}">Edit Profile</a></li>
                                            <li><form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-start mt-2">
                <button type="submit" class="btn btn-sm text-white" style="background-color: #1E4387;">
                    Send Password Reset Links
                </button>
            </div>
        </form>

        <div class="d-flex mt-4 justify-content-center">
            {!! $employees->links() !!}
        </div>
    </div>

    <script>
        // Select all checkboxes
        document.getElementById('selectAll').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });

        // Cancel search button function
        document.getElementById('cancelButton').addEventListener('click', function () {
            document.getElementById('searchInput').value = '';
            document.getElementById('searchForm').submit();
        });

        // Pressing Enter on the search box submits the form
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault(); // Prevents default form submission behavior
                document.getElementById('searchForm').submit();
            }
        });

        // Automatically submit the import form after the user selects a file
        document.getElementById('importEmployeeFile').addEventListener('change', function () {
            if (this.files.length > 0) {
                document.getElementById('importEmployeesForm').submit();
            }
        });
    </script>
@endsection
