@extends('layouts.app-master')

@section('content')
    <div class="container-fluid mt-4 p-5 bg-white rounded">
        <h1 class="text-center mb-4">EMPLOYEE MANAGEMENT</h1>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        {{-- Search Form --}}
        <div class="row mb-4">
            <div class="col">
                <div class="float-end">
                    <form method="GET" action="{{ route('employees.index') }}" id="searchForm">
                        <div class="input-group">
                            <input type="text" class="form-control" name="searchEmployee" placeholder="Search..." value="{{ request('searchEmployee') }}" id="searchInput">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary" id="cancelButton" style="display: {{ request('searchEmployee') ? 'inline-block' : 'none' }};">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Export Buttons --}}
                <div class="float-end mx-4 align-text-bottom">
    <span><strong class="pt-4 mx-4">Export As:</strong></span>
    <span>
        <a href="{{ route('employees.export.pdf') }}" class="btn btn-sm float-end text-white mb-4 mx-1" style="background-color: #1E4387;">PDF</a>
        <a href="{{ route('employees.export.csv') }}" class="btn btn-sm float-end text-white mb-4 mx-1" style="background-color: #1E4387;">CSV</a>
        <a href="{{ route('employees.export.xls') }}" class="btn btn-sm float-end text-white mb-4 mx-1" style="background-color: #1E4387;">XLS</a>
    </span>
</div>

            </div>
        </div>

        {{-- Bulk Password Reset Form --}}
        <form method="POST" action="{{ route('employees.bulk-reset') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <a href="{{ route('employees.create') }}" class="btn btn-sm float-end text-white mb-4" style="background-color: #1E4387;">
                        <i class="fa fa-plus"></i> Add new employee
                    </a>
                    <button type="submit" class="btn btn-sm float-end mx-2 text-white mb-4" style="background-color: #1E4387;">
                        Send Password Reset Links
                    </button>
                </div>
            </div>

            <div class="overflow-auto">
                <table class="table table-striped bdr table-bordered table-responsive">
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
                                        <button class="btn btn-light btn-sm" type="button"
                                            id="dropdownMenuButton{{ $employee->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $employee->id }}">
                                            <li><a class="dropdown-item" href="{{ route('employees_supervisors.tags.index', $employee->id) }}">Manage Supervisees</a></li>
                                            <li><a class="dropdown-item" href="{{ route('employees.show', $employee->id) }}">View Profile</a></li>
                                            <li><a class="dropdown-item" href="{{ route('employees.edit', $employee->id) }}">Edit Profile</a></li>
                                            <li>
                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                                @csrf
                                                @method('DELETE') <!-- This is necessary to send a DELETE request -->
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>

                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
    </script>
@endsection
