@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h1>Employees</h1>
        <div class="lead">
            Manage your employees here.
            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm float-right">Add new employee</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <form method="POST" action="{{ route('employees.bulk-reset') }}">
            @csrf
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll"></th>
                        <th scope="col" width="1%">#</th>
                        <th scope="col" width="15%">First Name</th>
                        <th scope="col" width="15%">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="10%">Employee ID</th>
                        <th scope="col" width="10%">Gender</th>
                        <th scope="col" width="1%" colspan="3"></th>
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
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->employee_id }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td><a href="{{ route('employees_supervisors.tags.index', $employee->id) }}"
                                    class="btn btn-success btn-sm">Assign</a></td>
                            <td><a href="{{ route('employees.show', $employee->id) }}"
                                    class="btn btn-warning btn-sm">Show</a></td>
                            <td><a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td><a href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger btn-sm">Delete</a>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            <button type="submit" class="btn btn-primary">Send Password Reset Links</button>
        </form>

        <div class="d-flex">
            {!! $employees->links() !!}
        </div>

    </div>
  
    <script>
        document.getElementById('selectAll').addEventListener('click', function (e) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });
    </script>

@endsection
