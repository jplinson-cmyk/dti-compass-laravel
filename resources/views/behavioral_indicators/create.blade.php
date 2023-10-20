@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h2>Add new behavioral indicator</h2>
    <p class="lead">Add a new behavioral indicator</p>

    <div class="container mt-4">
        <form method="POST" action="{{ route('behavioral_indicators.store') }}">
            @csrf

            <div class="mb-3">
                <label for="competencyCategory" class="form-label">Competency Category</label>
                <input type="text" class="form-control" id="competencyCategory" disabled>
            </div>
            <div class="mb-3">
                <label for="competency_id" class="form-label">Competency</label>
                <select class="form-select" name="competency_id" id="competencySelect" required>
                    <option value="" selected>Select a competency</option>
                    @foreach ($competencies as $competency)
                        <option value="{{ $competency->id }}" data-category="{{ $competency->competencyCategory->category_name }}">
                            {{ $competency->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('competency_id'))
                    <span class="text-danger">{{ $errors->first('competency_id') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" name="level" required>
                    <option value="" selected>Select a level</option>
                    <option value="1">Basic</option>
                    <option value="2">Intermediate</option>
                    <option value="3">Advanced</option>
                    <option value="4">Superior</option>
                </select>
                @if ($errors->has('level'))
                    <span class="text-danger">{{ $errors->first('level') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" 
                    name="description" 
                    placeholder="Description" required>{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Save Behavioral Indicator</button>
            <a href="{{ route('behavioral_indicators.index') }}" class="btn btn-default">Back</a>
        </form>
    </div>
</div>

<script>
    // Listen for changes in the competency dropdown
    const competencySelect = document.getElementById('competencySelect');
    const competencyCategoryInput = document.getElementById('competencyCategory');
    
    competencySelect.addEventListener('change', (event) => {
        const selectedOption = competencySelect.options[competencySelect.selectedIndex];
        competencyCategoryInput.value = selectedOption.getAttribute('data-category');
    });
</script>
@endsection
