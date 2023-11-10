@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Divisions</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                <p><strong>Division Name:</strong> {{ $division->name }}</p>
                <p><strong>Short Name:</strong> {{ $division->short_name }}</p>
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('divisions.edit', $division->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('divisions.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection