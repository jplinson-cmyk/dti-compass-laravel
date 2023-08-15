@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h2>Update Behavioral Indicator</h2>
    <div class="lead">
        Edit Behavioral Indicator.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{ route('behavioral_indicators.update', $behavioralIndicator->id) }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="competencyCategory" class="form-label">Competency Category</label>
                <input type="text" class="form-control" id="competencyCategory" value="{{ $behavioralIndicator->competency->competencyCategory->category_name }}" disabled>
            </div>
            
            <div class="mb-3">
                <label for="competency_id" class="form-label">Competency</label>
                <select class="form-select" name="competency_id" required id="competencySelect">
                    <option value="" selected>Select a competency</option>
                    @foreach ($competencies as $competency)
                        <option value="{{ $competency->id }}" data-category="{{ $competency->competencyCategory->category_name }}" {{ $competency->id == $behavioralIndicator->competency_id ? 'selected' : '' }}>
                            {{ $competency->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('competency_id'))
                    <span class="text-danger">{{ $errors->first('competency_id') }}</span>
                @endif
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" 
                    name="description" 
                    placeholder="Description" required>{{ $behavioralIndicator->description }}</textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" name="level" required>
                    <option value="" selected>Select a level</option>
                    <option value="1" {{ $behavioralIndicator->level == 1 ? 'selected' : '' }}>Basic</option>
                    <option value="2" {{ $behavioralIndicator->level == 2 ? 'selected' : '' }}>Intermediate</option>
                    <option value="3" {{ $behavioralIndicator->level == 3 ? 'selected' : '' }}>Advanced</option>
                    <option value="4" {{ $behavioralIndicator->level == 4 ? 'selected' : '' }}>Superior</option>
                </select>
                @if ($errors->has('level'))
                    <span class="text-danger">{{ $errors->first('level') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href="{{ route('behavioral_indicators.index') }}" class="btn btn-default">Back</a>
        </form>
    </div>
</div>

<script>
    // Initialize the competency category input with the initial value
    const competencyCategoryInput = document.getElementById('competencyCategory');
    competencyCategoryInput.value = "{{ $behavioralIndicator->competency->competencyCategory->category_name }}";

    // Listen for changes in the competency dropdown
    const competencySelect = document.getElementById('competencySelect');
    competencySelect.addEventListener('change', (event) => {
        const selectedOption = competencySelect.options[competencySelect.selectedIndex];
        competencyCategoryInput.value = selectedOption.getAttribute('data-category');
    });
</script>
@endsection
