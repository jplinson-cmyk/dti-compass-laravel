@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Competency sets</h2>
        <div class="lead">
            Competency sets details
        </div>

        <div class="container mt-4">
            <div>
                <p><strong>id:</strong> {{ $competency_sets->id }}</p>
                <p><strong>Functional Group:</strong> {{ $competency_sets->functionalGroup->name ?? 'N/A' }}</p>
                <p><strong>Bureau Office:</strong> {{ $competency_sets->bureauOffice->name ?? 'N/A' }}</p>
                <p><strong>Division:</strong> {{ $competency_sets->division->name ?? 'N/A' }}</p>
                <p><strong>Position:</strong> {{ $competency_sets->position->name ?? 'N/A' }}</p>
                <p><strong>Competency:</strong> {{ $competency_sets->competency->name ?? 'N/A' }}</p>
                <p><strong>Standard:</strong> {{ $competency_sets->standard ?? 'N/A' }}</p>

                
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('competency_sets.edit', $competency_sets->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('competency_sets.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection