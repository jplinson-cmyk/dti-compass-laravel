@extends('layouts.compass')

@section('content')
    <div class="container-fluid mt-5">
        <h1 class="mb-4">Employee Assessment</h1>
        <div class="row">
            <div class="col-12">
                    <table class="table table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date Submitted</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($supervisedEmployees as $supervisedEmployee)
                                <tr>
                                    <th scope="row">{{ $supervisedEmployee->id }}</th>
                                    <td>{{ $supervisedEmployee->employee_id }}</td>
                                    <td>{{ $supervisedEmployee->firstname }}</td>
                                    <td>{{ $supervisedEmployee->lastname }}</td>
                                    <td>{{ $supervisedEmployee->email }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton{{ $supervisedEmployee->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton{{ $supervisedEmployee->id }}">
                                                <li><a class="dropdown-item" href="{{ route('competency_assessment.about', ['employee' => $supervisedEmployee->id, 'session_type' => 'employee_assessment']) }}">Assess</a></li>
                                                <li><a class="dropdown-item" href="#">View Profile</a></li>
                                                <li><a class="dropdown-item" href="#">View Summary of Rating</a></li>
                                                <li><a class="dropdown-item" href="#">Career Development Plan</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No employees found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
