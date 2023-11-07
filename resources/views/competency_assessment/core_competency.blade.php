@extends('layouts.app-master')

@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h1>PART 1. ORGANIZATIONAL/CORE COMPETENCY</h1>
        </div>
        <div class="row">
            <div class="col">
                <h2>Description</h2>
            </div>
            <div class="col text-center">
                <h2>Rating Scale</h2>
            </div>
        </div>  

        @php
            $levelHeadings = [1 => 'Basic', 2 => 'Intermediate', 3 => 'Advanced', 4 => 'Superior'];
            $currentLevel = null;
            $currentCompetencyName = null;
        @endphp

        @foreach ($behavioralIndicators as $indicator)
            @php
                $levelHeading = $levelHeadings[$indicator->level] ?? 'Unknown';
                $competencyName = $indicator->competency->name ?? 'Unknown' ;
                
                if ($currentLevel !== $levelHeading || $currentCompetencyName !== $competencyName) {
                    if ($currentLevel !== null) {
                        echo '</form>';
                    }
                    echo '<h3>' . $competencyName . ' (' . $levelHeading . ')</h3>';
                    echo '<form method="post" action="#">';
                    echo csrf_field();
                    $currentLevel = $levelHeading;
                    $currentCompetencyName = $competencyName;
                }
            @endphp

            <div class="row">
                <div class="col-md-8">
                    <p>{{ $indicator->description }}</p>
                </div>
                <div class="col-md-4">
                    @for ($i = 0; $i <= 5; $i++)
                        <label>
                            <input type="radio" name="ratings[{{ $indicator->id }}]" value="{{ $i }}">
                            {{ $i }}
                        </label>
                    @endfor
                </div>
            </div>
        @endforeach

        @if ($currentLevel !== null)
            </form>
        @endif
        <button type="button" class="btn btn-primary">Back</button>

        <button type="submit" class="btn btn-primary">Submit & Continue</button>
    </div>
@endsection
