@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Bureau Office</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                <p><strong>Functional Group Name:</strong> {{ $bureau_office->id }}</p>
                <p><strong>Functional Group Name:</strong> {{ $bureau_office->name }}</p>
                <p><strong>Functional Group Name:</strong> {{ $bureau_office->short_name }}</p>
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('functionalgroups.edit', $bureau_office->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('functionalgroups.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection