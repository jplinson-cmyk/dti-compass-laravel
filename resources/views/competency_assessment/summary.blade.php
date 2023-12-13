@extends('layouts.compass')

@section('compass-content')
    <h2 class="text-center">SUMMARY OF RATING</h2>

    <div class="container">
        <div class="accordion" id="summaryAccordion">
            @foreach ($structuredItems as $categoryId => $category)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $categoryId }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $categoryId }}" aria-expanded="true"
                            aria-controls="collapse{{ $categoryId }}">
                            {{ $category['category_name'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $categoryId }}" class="accordion-collapse collapse"
                        aria-labelledby="heading{{ $categoryId }}" data-bs-parent="#summaryAccordion">
                        <div class="accordion-body">
                            @foreach ($category['competencies'] as $competencyId => $competency)
                                <h5>{{ $competency['name'] }}</h5>
                                <table class="table table-bordered">
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
                                            <th>Level of Mastery</th>
                                            <th>Competency Standard</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($competency['indicators'] as $indicator)
                                            <tr>
                                                <td>{{ $indicator['level'] }}</td>
                                                <td>{{ $indicator['description'] }}</td>
                                                <td>{{ $indicator['self_assessment'] }}</td>
                                                <td>{{ $indicator['supervisor'] }}</td>
                                                <td>{{ $indicator['final_rating'] }}</td>
                                                <td>{{ $indicator['performance_observation'] }}</td>
                                                <td>{{ number_format($competency['average_final_rating'],2) }}</td>
                                                <td>{{ $competency['mastery_level'] }}</td>
                                                <td>
                                                    {{ number_format($overallAverageRating, 2) }}                                      
                                                </td>
                                                <td>
                                                    {{ $overallMasteryLevel }}              
                                                </td>
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
                class="btn btn-outline-secondary">Back</a>
            <form action="{{ route('competency_assessment.save.summary', ['employee' => $employee, 'session_type' => $session_type]) }}" method="post"
                class="d-inline">
                @csrf
                    <button type="submit" class="btn btn-outline-primary">Continue</button>
            </form>
        </div>
    </div>
@endsection
