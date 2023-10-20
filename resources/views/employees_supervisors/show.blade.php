@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Show employee</h1>

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
                Employee ID: {{ $employee->employee_id }}
            </div>
            <div>
                Gender: {{ $employee->gender }}
            </div>
            <div>
                Employment Status: {{ $employee->employmentStatus->name }}
            </div>
            <div>
                Functional Group: {{ $employee->functionalGroup->name }}
            </div>
            <div>
                Bureau Office: {{ $employee->bureauOffice->name }}
            </div>
            <div>
                Division: {{ $employee->division->name }}
            </div>
            <div>
                Immediate Supervisor: {{ $employee->immediate_supervisor }}
            </div>
            <div>
                Position: {{ $employee->position->name }}
            </div>
            <div>
                Job Level: {{ $employee->jobLevel->name }}
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
