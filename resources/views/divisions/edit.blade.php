
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Division</h2>
        <div class="lead">
            Edit Division.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('divisions.update', $division->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Division Name</label>
                    <input value="{{ $division->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Division Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('divisions.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection