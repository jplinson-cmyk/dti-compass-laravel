@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Competency Sets</h2>
        <div class="lead">
            Edit Competency Sets.
        </div>

        <div class="container mt-4">
            <form method="POST" action="{{ route('competency_sets.update', $competencySet->id) }}">

                @method('patch')
                @csrf



                {{--  --}}
                <div class="mb-3">
                    <label for="functional_group_id" class="form-label">Functional Group</label>
                    <select class="form-select" name="functional_group_id" required id="competencySetSelect">
                        <option value="" selected>Functional Group</option>
                        @foreach ($functional_groups as $functional_group)
                            <option value="{{ $functional_group->id }}" data-category="{{ $functional_group->name }}"
                                {{ $functional_group->id == $competencySet->functional_group_id ? 'selected' : '' }}>
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
                    <select class="form-select" name="bureau_office_id" id="bureauOfficeSelect">
                        <option value="" selected>Select a Bureau Office</option>
                        @foreach ($bureau_offices as $bureau_office)
                            <option value="{{ $bureau_office->id }}" data-category="{{ $bureau_office->name }}"
                                {{ $bureau_office->id == $competencySet->bureau_office_id ? 'selected' : '' }}>
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
                    <select class="form-select" name="bureau_office_id" id="bureauOfficeSelect">
                        <option value="" selected>Select a Division</option>
                        @foreach ($divisions as $division)
                            <option value="{{ $division->id }}" data-category="{{ $division->name }}"
                                {{ $division->id == ($competencySet->division ? $competencySet->division->id : 0) ? 'selected' : '' }}>
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
                    <select class="form-select" name="position_id" id="bureauOfficeSelect">
                        <option value="" selected>Select a Position</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}" data-category="{{ $position->name ?? 'N/A' }}"
                                {{ $position->id == $competencySet->position->id ? 'selected' : '' }}>
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
                    <select class="form-select" name="position_id" id="bureauOfficeSelect">
                        <option value="" selected>Select a Competency</option>
                        @foreach ($competencies as $competency)
                            <option value="{{ $competency->id }}" data-category="{{ $competency->name ?? 'N/A' }}"
                                {{ $competency->id == $competencySet->competency->id ? 'selected' : '' }}>
                                {{ $competency->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('competency_id'))
                        <span class="text-danger">{{ $errors->first('competency_id') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="standard" class="form-label">standard</label>
                    <select class="form-select" name="standard" required>
                        <option value="" selected>Select a standard</option>
                        <option value="1" {{ $competencySet->standard == 1 ? 'selected' : '' }}>Basic</option>
                        <option value="2" {{ $competencySet->standard == 2 ? 'selected' : '' }}>Intermediate</option>
                        <option value="3" {{ $competencySet->standard == 3 ? 'selected' : '' }}>Advanced</option>
                        <option value="4" {{ $competencySet->standard == 4 ? 'selected' : '' }}>Superior</option>
                    </select>
                    @if ($errors->has('standard'))
                        <span class="text-danger">{{ $errors->first('standard') }}</span>
                    @endif
                </div>
                {{--  --}}


                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('competency_sets.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
@endsection
