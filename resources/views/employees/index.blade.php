@extends('layouts.app-master')

@section('content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        <h1 class="text-center mb-4">EMPLOYEE MANAGEMENT</h1>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>


        <form method="POST" action="{{ route('employees.bulk-reset') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <a href="{{ route('employees.create') }}" class="btn btn-sm float-end text-white mb-4"
                        style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new employee</a>
                    <button type="submit" class="btn btn-sm float-end mx-2 text-white mb-4"
                        style="background-color: #1E4387;">Send
                        Password Reset Links</button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="float-end">
                        <form method="GET" id="searchForm">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control" name="searchEmployee" placeholder="Search..."
                                    id="searchInput">
                                <button type="button" class="btn btn-outline-secondary" id="cancelButton"
                                    style="display: none;">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="float-end mx-4 align-text-bottom">
                        <span> <strong class="pt-4">Export As:</strong>
                            <span>
                                <a href="{{ route('employees.create') }}"
                                    class="btn btn-sm float-end text-white mb-4 mx-1"
                                    style="background-color: #1E4387;">PDF</a>
                                <a href="{{ route('employees.create') }}"
                                    class="btn btn-sm float-end text-white mb-4 mx-1"
                                    style="background-color: #1E4387;">CSV</a>
                                <a href="{{ route('employees.create') }}"
                                    class="btn btn-sm float-end text-white mb-4 mx-1"
                                    style="background-color: #1E4387;">XLS</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="overflow-auto">
                <table class="table table-striped bdr table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Employee Number</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Position</th>
                            <th scope="col"></th>
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
                                {{-- <th scope="row">{{ $employee->id }}</th> --}}
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
                                            <li><a class="dropdown-item"
                                                    href="{{ route('employees_supervisors.tags.index', $employee->id) }}">Manage
                                                    Supervisees</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('employees.show', $employee->id) }}">View Profile</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('employees.edit', $employee->id) }}">Edit Profile</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('employees.destroy', $employee->id) }}">Delete</a></li>
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
        document.getElementById('selectAll').addEventListener('click', function(e) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });
    </script>
@endsection
