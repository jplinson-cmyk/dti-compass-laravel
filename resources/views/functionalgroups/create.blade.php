@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new Functional Group</h2>
        <div class="lead">
            Add new Functional Group
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('functionalgroups.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Functional Group Name</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Functional Group" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="short_name" class="form-label">Functional Group Name</label>
                    <input value="{{ old('short_name') }}" 
                        type="text" 
                        class="form-control" 
                        name="short_name" 
                        placeholder="Short Name" required>

                    @if ($errors->has('short_name'))
                        <span class="text-danger text-left">{{ $errors->first('short_name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save Functional Group</button>
                <a href="{{ route('functionalgroups.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection