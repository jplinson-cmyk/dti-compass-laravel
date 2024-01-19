@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded ">
        @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="container-fluid rounded p-4 mb-4 text-white" style="background-color: #1E4387;">
                <h6>
                    <strong>You are currently evaluating:</strong>
                    <span>
                        {{ $employee->firstname }} {{ $employee->lastname }}
                    </span>
                </h6>
                <h6>
                    <strong>Employee's Position:</strong>
                    <span>
                        {{ $employee->position->name }}
                    </span>
                    </strong>
                </h6>
            </div>
        @endif
        <h1 class="text-center">SUMMARY OF RATING</h1>
        <div class="text-end mb-4">
            <button type="button" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Export As PDF</button>
        </div>
        <div class="accordion" id="summaryAccordion">
            @foreach ($structuredItems as $categoryId => $category)
                <div class="accordion-item mb-4 shadow-lg">
                    <h2 class="accordion-header" id="heading{{ $categoryId }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $categoryId }}" aria-expanded="true"
                            aria-controls="collapse{{ $categoryId }}">
                            {{ $category['category_name'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $categoryId }}" class="accordion-collapse collapse "
                        aria-labelledby="heading{{ $categoryId }}" data-bs-parent="#summaryAccordion">
                        <div class="accordion-body">
                            @foreach ($category['competencies'] as $competencyId => $competency)
                                <h5>{{ $competency['name'] }}</h5>
                                @php
                                    $competencyRowCount = count($competency['indicators']);
                                @endphp
                                @php
                                    $levelRowCount = [];
                                    foreach ($competency['indicators'] as $indicator) {
                                        $level = $indicator['level'];
                                        if (!isset($levelRowCount[$level])) {
                                            $levelRowCount[$level] = 0;
                                        }
                                        $levelRowCount[$level]++;
                                    }
                                @endphp
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Level</th>
                                            <th>Behavioral Indicators</th>
                                            <th>Self-Assessment</th>
                                            <th>Supervisor</th>
                                            <th>Final Rating</th>
                                            <th>Performance Observation</th>
                                            <th>Average Rating</th>
                                            <th>Level of Mastery</th>
                                            <th>Overall Competency Level</th>
                                            <th>Overall Level of Mastery</th>
                                            <th>Competency Standard</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($competency['indicators'] as $key => $indicator)
                                            <tr>
                                                <td>{{ $indicator['level'] }}</td>
                                                <td>{{ $indicator['description'] }}</td>
                                                <td>{{ $indicator['self_assessment'] }}</td>
                                                <td>{{ $indicator['supervisor'] }}</td>
                                                <td>{{ $indicator['final_rating'] }}</td>
                                                <td>{{ $indicator['performance_observation'] }}</td>
                                                @if ($key === 0 || !isset($previousLevel) || $previousLevel !== $indicator['level'])
                                                    @php
                                                        $previousLevel = $indicator['level'];
                                                        $rowSpanCount = $levelRowCount[$indicator['level']] ?? 1;
                                                    @endphp
                                                    <td class="fw-bolder no-striping" rowspan="{{ $rowSpanCount }}">
                                                        {{ number_format($competency['levels'][$indicator['level']]['average_rating'], 2) }}
                                                    </td>
                                                    <td class="fw-bolder" rowspan="{{ $rowSpanCount }}">
                                                        {{ $competency['mastery_level'] }}</td>
                                                @endif

                                                @if ($key === 0)
                                                    <td class="fw-bolder no-striping" rowspan="{{ $competencyRowCount }}">
                                                        {{ number_format($overallAverageRating, 2) }}
                                                    </td>
                                                    <td class="fw-bolder no-striping" rowspan="{{ $competencyRowCount }}">
                                                        {{ $overallMasteryLevel }}
                                                    </td>
                                                @endif
                                                <td>{{ $indicator['standard'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => $competencyAssessment->items->last()->behavioralIndicator->competency->competency_category_id]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back</a>
            <form
                action="{{ route('competency_assessment.save.summary', ['employee' => $employee, 'session_type' => $session_type]) }}"
                method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-md mt-2 text-light"
                    style="background-color:#1E4387;">Continue</button>
            </form>
        </div>
    </div>
@endsection
