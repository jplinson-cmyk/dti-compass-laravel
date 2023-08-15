@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Competency</h2>
        <div class="lead">
            Competency Details
        </div>

        <div class="container mt-4">
            <div>
                <p><strong>Category:</strong> {{ $competencies->competencyCategory->category_name }}</p>
                <p><strong>Competency Name:</strong> {{ $competencies->name }}</p>
                <p><strong>Description:</strong> {{ $competencies->description }}</p>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('competencies.edit', $competencies->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('competencies.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection