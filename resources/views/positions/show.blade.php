@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Position</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Position Name: {{ $position->name }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('positions.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection