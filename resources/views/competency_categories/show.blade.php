@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Competency Category</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Category Name: {{ $competency_categories->category_name }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('competency_categories.edit', $competency_categories->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('competency_categories.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection