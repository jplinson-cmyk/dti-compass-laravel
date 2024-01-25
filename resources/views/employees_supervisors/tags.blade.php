@extends('layouts.app-master')

@section('content')
    <div class="container-fluid mt-4 p-5 bg-white rounded">
        <h1 class="text-center mb-4">SUPERVISEE MANAGEMENT</h1>
        <div class="pb-5">
           
            <div class="d-flex flex-row align-items-center justify-content-center pt-5">
                <div class="p-2 shadow-lg" style="background-color:rgb(248, 248, 248); border-radius:15px;">
                    <img src="{!! url('/images/user.png') !!}" alt="Employee Avatar" class="employee-avatar " width="130px;">
                </div>
                <div class="p-2">
                    <div class="card bg-light p-">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p><strong>Employee Name:</strong> {{$employee->firstname}} {{$employee->lastname}}</p>
                                </div>
                                <div class="col">
                                    <p><strong>Email: </strong> {{$employee->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><strong>Role: </strong> {{$employee->user->getRoleNames()->first()}}</p>
                                </div>
                                <div class="col">
                                    <p><strong>Division:</strong> {{$employee->division->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        <div class="row mb-2">
            <div class="col">
                <a href="{{ route('employees_supervisors.tags.create', ['employee' => $employee->id]) }}"
                    class="btn btn-sm float-end text-white mb-4" style="background-color: #1E4387;"><i class="fa fa-plus"
                        aria-hidden="true"></i> Assign new employee</a>
            </div>
        </div>


        <div class="mt-2">
            @include('layouts.partials.messages')
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
            </div>
        </div>
        <table class="table table-striped bdr table-bordered table-responsive">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="15%">First Name</th>
                    <th scope="col" width="15%">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="10%">Employee ID</th>
                    <th scope="col" width="10%">Gender</th>
                    <th scope="col" width="1%" ></th>
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
                        <td>
                            <div class="btn-group dropstart">
                                <button class="btn btn-light btn-sm" type="button"
                                    id="dropdownMenuButton{{ $employee->id }}" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $employee->id }}">
                                    <li><a class="dropdown-item"
                                        href="{{ route('employees.show', $employeeSupervisor->id) }}">Show</a></li>
                                    <li> {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['employees_supervisors.tags.destroy', $employee->id, $employeeSupervisor->id],
                                        'style' => 'display:inline',
                                    ]) !!}
                                    {!! Form::submit('Remove', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}</li> 
                                </ul>
                            </div>
                        </td>



                    </tr>
                @endforeach
            </tbody>


        </table>

        <div class="d-flex mt-4 justify-content-center">
            {!! $taggedEmployees->links() !!}
        </div>
    </div>
@endsection
