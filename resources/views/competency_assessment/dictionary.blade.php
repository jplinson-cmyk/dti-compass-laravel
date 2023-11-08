@extends('layouts.app-master')

@section('content')
    <div class="container">
        <h1 class="text-center">THE DTI COMPETENCY DICTIONARY</h1>
        <p>For your reference, here is your complete guide to the DTI Competency Dictionary. If you wish to view the competency descriptions prior to beginning the assessment, you may scroll down and browse through this page. When you're ready to begin with the assessment, click the 'Continue' button.</p>

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
                                    <th>No.</th>
                                    <th>Competency Name</th>
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
        <div class="form-group">
            <a href="{{ route('competency_assessment.about', ['employee' => $employee]) }}"
            class="btn btn-default float-left mt-2">Back</a>
            

            <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee]) }}" class="btn btn-primary float-right mt-2">Continue</a>
        </div>
    </div>
@endsection

