@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Show employee</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                First Name: {{ $employee->firstname }}
            </div>
            <div>
                Last Name: {{ $employee->lastname }}
            </div>
            <div>
                Email: {{ $employee->email }}
            </div>
            <div>
                Employee ID: {{ $employee->employee_id_number }}
            </div>
            <div>
                Gender: {{ $employee->gender }}
            </div>
            <div>
                Employment Status: {{ $employee->employment_status }}
            </div>
            <div>
                Functional Group: {{ $employee->functional_group }}
            </div>
            <div>
                Bureau Office: {{ $employee->bureau_office }}
            </div>
            <div>
                Division: {{ $employee->division }}
            </div>
            <div>
                Immediate Supervisor: {{ $employee->immediate_supervisor }}
            </div>
            <div>
                Position: {{ $employee->position }}
            </div>
            <div>
                Job Level: {{ $employee->job_level }}
            </div>
            <div>
                Last Review Date: {{ $employee->last_review_at }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('employees.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
