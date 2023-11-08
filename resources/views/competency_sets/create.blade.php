@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h2>Add new Competency Set</h2>
    <p class="lead">Add a new Competency Set</p>

    <div class="container mt-4">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action="{{ route('competency_sets.store') }}">
            @csrf
            @method("POST")

         
            <div class="mb-3">
                <label for="functional_group_id" class="form-label">Functional Group</label>
                <select class="form-select" name="functional_group_id" id="functionalGroupSelect" required>
                    <option value="" selected>Select a Functional Group</option>
                    @foreach ($functional_groups as $functional_group)
                        <option value="{{ $functional_group->id }}" data-category="{{ $functional_group->name ?? 'N/A'}}">
                            {{ $functional_group->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('functional_group_id'))
                    <span class="text-danger">{{ $errors->first('functional_group_id') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="bureau_office_id" class="form-label">Bureau Offices</label>
                <select class="form-select" name="bureau_office_id" id="bureauOfficeSelect" required>
                    <option value="" selected>Select a Bureau Office</option>
                    @foreach ($bureau_offices as $bureau_office)
                        <option value="{{ $bureau_office->id }}" data-category="{{ $bureau_office->name ?? 'N/A'}}">
                            {{ $bureau_office->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('bureau_office_id'))
                    <span class="text-danger">{{ $errors->first('bureau_office_id') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <select class="form-select" name="division_id" id="divisionSelect" required>
                    <option value="" selected>Select a Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}" data-category="{{ $division->name ?? 'N/A'}}">
                            {{ $division->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('division_id'))
                    <span class="text-danger">{{ $errors->first('division_id') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" name="position_id" id="divisionSelect" required>
                    <option value="" selected>Select a Position</option>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}" data-category="{{ $position->name ?? 'N/A'}}">
                            {{ $position->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('position_id'))
                    <span class="text-danger">{{ $errors->first('position_id') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="competency_id" class="form-label">Position</label>
                <select class="form-select" name="competency_id" id="divisionSelect" required>
                    <option value="" selected>Select a Position</option>
                    @foreach ($competencies as $competency)
                        <option value="{{ $competency->id }}" data-category="{{ $competency->name ?? 'N/A'}}">
                            {{ $competency->name }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('competency_id'))
                    <span class="text-danger">{{ $errors->first('competency_id') }}</span>
                @endif
            </div>
            
            <div class="mb-3">
                <label for="standard" class="form-label">Standard</label>
                <select class="form-select" name="standard" required>
                    <option value="" selected>Select a standard</option>
                    <option value="1">Basic</option>
                    <option value="2">Intermediate</option>
                    <option value="3">Advanced</option>
                    <option value="4">Superior</option>
                </select>
                @if ($errors->has('standard'))
                    <span class="text-danger">{{ $errors->first('standard') }}</span>
                @endif
            </div>
            
            
            <button type="submit" class="btn btn-primary">Save Competency Sets</button>
            <a href="{{ route('competency_sets.index') }}" class="btn btn-default">Back</a>
        </form>
    </div>
</div>


@endsection
