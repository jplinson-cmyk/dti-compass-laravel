@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h1>Employees Assigned</h1>
        <div class="lead">
            View employees who are assigned.
            <a href="{{ route('employees_supervisors.tags.create', ['employee' => $employee->id]) }}"
                class="btn btn-primary btn-sm float-right">Assign new employee</a>
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
                @foreach ($taggedEmployees as $employeeSupervisor)
                    <tr>
                        <th scope="row">{{ $employeeSupervisor->id }}</th>
                        <td>{{ $employeeSupervisor->firstname }}</td>
                        <td>{{ $employeeSupervisor->lastname }}</td>
                        <td>{{ $employeeSupervisor->email }}</td>
                        <td>{{ $employeeSupervisor->employee_id }}</td>
                        <td>{{ $employeeSupervisor->gender }}</td>
                        <td><a href="{{ route('employees.show', $employeeSupervisor->id) }}"
                                class="btn btn-warning btn-sm">Show</a></td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['employees_supervisors.tags.destroy', $employee->id, $employeeSupervisor->id],
                                        'style' => 'display:inline',
                                    ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                                


                    </tr>
                @endforeach
            </tbody>


        </table>

        {{-- <div class="d-flex">
        {!! $taggedEmployees->links() !!}
    </div> --}}
    </div>
@endsection
