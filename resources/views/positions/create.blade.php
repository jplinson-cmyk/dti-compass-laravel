@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new Position</h2>
        <div class="lead">
            Add new Position
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('positions.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Position Name</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Position" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="short_name" class="form-label">Short Name</label>
                    <input value="{{ old('short_name') }}" 
                        type="text" 
                        class="form-control" 
                        name="short_name" 
                        placeholder="Short Name" required>

                    @if ($errors->has('short_name'))
                        <span class="text-danger text-left">{{ $errors->first('short_name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save Position</button>
                <a href="{{ route('positions.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection