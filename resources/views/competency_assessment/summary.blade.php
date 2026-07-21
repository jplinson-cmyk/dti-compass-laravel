@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
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
                </h6>
            </div>
        @endif
        <h1 class="text-center">SUMMARY OF RATING</h1>
        <div class="text-end mb-4">
            <button type="button" class="btn btn-secondary text-white mt-2 my-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fas fa-info-circle"></i>
                <span class="rating-scale-text"></span>
            </button>
            @if(auth()->user()->hasRole('supervisor') || auth()->user()->hasRole('admin'))
            <form action="{{ route('competency_assessment.export.summary', [
                'employee' => $employee->id,  
                'session_type' => $session_type, 
                'id' => $competencyAssessment->id
            ]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-md text-light" style="background-color:#1E4387;">Export as PDF</button>
            </form>
            @endif
        </div>

        <div class="accordion" id="summaryAccordion">
            @foreach ($structuredItems as $categoryId => $category)
                <div class="accordion-item mb-4 shadow-lg">
                    <h2 class="accordion-header" id="heading{{ $categoryId }}">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $categoryId }}" aria-expanded="true"
                            aria-controls="collapse{{ $categoryId }}">
                            <span>{{ $category['category_name'] }}</span>
                        </button>
                    </h2>
                    <div id="collapse{{ $categoryId }}" class="accordion-collapse collapse"
                        aria-labelledby="heading{{ $categoryId }}" data-bs-parent="#summaryAccordion">
                        <div class="accordion-body">
                            @foreach ($category['competencies'] as $competencyId => $competency)
                                <h5 class="mt-3 mx-3 mb-3">{{ $competency['name'] }}</h5>
                                <div class="summary-table">
                                    <table class="table table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th rowspan="2" class="align-middle">{{ $category['category_name'] }}</th>
                                                <th rowspan="2" class="align-middle text-nowrap" style="max-width: 10%;">
                                                    Behavioral Indicators</th>
                                                <th colspan="9" class="text-center">Rating</th>
                                            </tr>
                                            <tr>
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
                                                    <td class="text-center">{{ $competency['name'] }} ({{ $indicator['level'] }})</td>
                                                    <td class="text-center">{{ $indicator['description'] }}</td>
                                                    <td class="text-center">{{ $indicator['self_assessment'] }}</td>
                                                    <td class="text-center">{{ $indicator['supervisor'] }}</td>
                                                    <td class="text-center">{{ $indicator['final_rating'] }}</td>
                                                    <td class="text-center">{{ $indicator['performance_observation'] }}</td>
                                                    <td class="fw-bolder no-striping text-center">
                                                        {{ number_format($competency['levels'][$indicator['level']]['average_rating'], 2) }}
                                                    </td>
                                                    <td class="fw-bolder text-center">
                                                        {{ $competency['levels'][$indicator['level']]['mastery_level'] }}
                                                    </td>
                                                    <td class="fw-bolder no-striping text-center">
                                                        {{ number_format($competency['overall_average_rating'], 2) }}
                                                    </td>
                                                    <td class="fw-bolder no-striping text-center">
                                                        {{ $competency['overall_mastery_level'] }}
                                                    </td>
                                                    <td class="text-center">{{ $indicator['standard'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => $competencyAssessment->items->last()->behavioralIndicator->competency->competency_category_id]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back</a>
                <a href="{{ route('competency_assessment.pdap', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
    class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Continue to PDAP</a>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Title Here</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>
    @include('auth.partials.privacy_policy')
@endsection
