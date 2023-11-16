@extends('layouts.app-master')

@section('content')
<h2 class="text-center">SUMMARY OF RATING</h2>
<a href="#" class="btn btn-primary float-right mt-2">Export As PDF</a>
    <div class="container">


        <div class="accordion" id="competencyAccordion">
            @foreach ($competencyCategories as $category)
            <div class="accordion-item">
                <h2 class="accordion-header" id="category{{ $category->id }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="true">
                        {{ $category->category_name }}
                    </button>
                </h2>

                <div id="collapse{{ $category->id }}" class="accordion-collapse collapse show" data-bs-parent="#competencyAccordion">
                    <div class="accordion-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Core Competency</th>
                                    <th>Behavioral Indicators</th>
                                    <th>Self-Assessment</th>
                                    <th>Supervisor</th>
                                    <th>Final Rating</th>
                                    <th>Performance Observation</th>
                                    <th>Average Rating</th>
                                    <th>Level of Mastery</th>
                                    <th>Overall Competency Level</th>
                                    <th>Level of Mastery</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->competencies as $key => $competency)
                                <tr>
                                    <td>{{ $competency->name }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="form-group">
            <a href="{{ route('competency_assessment.about', ['employee' => $employee]) }}"
            class="btn btn-default float-left mt-2">Back</a>
            <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee]) }}" class="btn btn-primary float-right mt-2">Continue</a>
        </div>
    </div>
@endsection

