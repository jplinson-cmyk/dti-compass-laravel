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
                    </strong>
                </h6>
            </div>
        @endif
        <h1 class="text-center mb-4">THE DTI COMPETENCY DICTIONARY</h1>
        <p class="text-left mb-4">For your reference, here is your complete guide to the DTI Competency Dictionary. If you
            wish to view the competency descriptions prior to beginning the assessment, you may scroll down and browse
            through this page. When you're ready to begin with the assessment, click the 'Continue' button.</p>

        <div class="accordion mb-4" id="competencyAccordion">
            @foreach ($competencyCategories as $category)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="category{{ $category->id }}">
                        <button class="accordion-button collapsed fw-bolder dictionary-title" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $category->id }}" aria-expanded="false">
                            {{ Str::upper($category->category_name) }}
                        </button>
                    </h2>

                    <div id="collapse{{ $category->id }}" class="accordion-collapse collapse"
                        data-bs-parent="#competencyAccordion">
                        <div class="accordion-body">
                            <table class="table table-bordered table-striped shadow-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Competency Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category->competencies as $key => $competency)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $competency->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('competency_assessment.about', ['employee' => $employee, 'session_type' => $session_type]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back</a>

            <form
                action="{{ route('competency_assessment.save.dictionary', ['employee' => $employee, 'session_type' => $session_type]) }}"
                method="post">
                @csrf
                @if ($competencyAssessmentExist)
                    <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => $session_type]) }}"
                        class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Next</a>
                @else
                    <button type="submit" class="btn btn-md mt-2 text-light"
                        style="background-color:#1E4387;">Continue</button>
                @endif
            </form>
        </div>
    </div>
    @include('auth.partials.privacy_policy')

@endsection
