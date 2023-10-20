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

        <table class="table table-striped">
            <thead>
            <tr>
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
                @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->id }}</th>
                        <td>{{ $employee->firstname }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->employee_id }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td><a href="{{ route('employees_supervisors.tags.index', $employee->id) }}" class="btn btn-success btn-sm">Tags</a></td>
                        <td><a href="{{ route('employees.show', $employee->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $employees->links() !!}
        </div>

    </div>
@endsection
