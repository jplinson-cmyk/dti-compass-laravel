@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new competency</h2>
        <div class="lead">
            Add new competency
        </div>

        <div class="container mt-4">
            <form method="POST" action="{{ route('competencies.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="competency_category_id" class="form-label">Category</label>
                    <select class="form-select" name="competency_category_id" required>
                        <option value="" selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('competency_category_id'))
                        <span class="text-danger text-left">{{ $errors->first('competency_category_id') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Competency Name</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Competency Name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" 
                        name="description" 
                        placeholder="Description" required>{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-primary">Save Competency</button>
                <a href="{{ route('competencies.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
@endsection