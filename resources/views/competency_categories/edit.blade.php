
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Competency Category</h2>
        <div class="lead">
            Edit Competency Category.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('competency_categories.update', $competency_categories->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input value="{{ $competency_categories->category_name }}" 
                        type="text" 
                        class="form-control" 
                        name="category_name" 
                        placeholder="Category Name" required>

                    @if ($errors->has('category_name'))
                        <span class="text-danger text-left">{{ $errors->first('category_name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('competency_categories.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection