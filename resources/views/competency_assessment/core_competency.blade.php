@extends('layouts.app-master')

@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h1>ORGANIZATIONAL / CORE COMPETENCY</h1>
            <p>Complete the form by clicking on the button to the left of your selected rating. All questions are required
                and must be answered.</p>
        </div>
        <div class="row">
            <div class="col">
                <h2>Description</h2>
            </div>
            <div class="col text-center">
                <h2>Rating Scale</h2>
            </div>
        </div>

        <form method="post" action="{{ route('competency_assessment.save.core_competency', ['employee' => $employee]) }}">
            @csrf

            @foreach ($employee->current_competency_assessment->getCompetencyItemsByCategory(1) as $item)
                <div class="row">
                    <div class="col-md-8">
                        <p id="{{ $item->id }}" class="">{{ $item->behavioralIndicator->description }}</p>
                    </div>
                    <div class="col-md-4">
                        @for ($i = 0; $i <= 5; $i++)
                            <label>
                                <input type="radio" name="rating[{{ $item->behavioralIndicator->id }}]"
                                    value="{{ $i }}">
                                {{ $i }}
                            </label>
                        @endfor
                    </div>
                </div>
            @endforeach

    </div>
    </div>

    <button type="button" class="btn btn-primary">Back</button>

    <button type="submit" class="btn btn-primary">Submit & Continue</button>
    </form>
    </div>
@endsection
