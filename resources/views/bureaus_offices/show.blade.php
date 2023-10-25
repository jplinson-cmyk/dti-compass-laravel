@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Bureau Office</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Bureau Office Name: {{ $bureau_office->name }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('functionalgroups.edit', $bureau_office->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('functionalgroups.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection