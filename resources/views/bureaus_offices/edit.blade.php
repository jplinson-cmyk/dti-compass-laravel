
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Bureau Office</h2>
        <div class="lead">
            Edit Bureau Office.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('bureaus_offices.update', $bureau_office->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Bureau Office Name</label>
                    <input value="{{ $bureau_office->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Bureau Office Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="short_name" class="form-label">Short Name</label>
                    <input value="{{ $bureau_office->short_name }}" 
                        type="text" 
                        class="form-control" 
                        name="short_name" 
                        placeholder="Bureau Office Name" required>

                    @if ($errors->has('short_name'))
                        <span class="text-danger text-left">{{ $errors->first('short_name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('bureaus_offices.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection