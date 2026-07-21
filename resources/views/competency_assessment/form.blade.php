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
        <div class="text-center mb-3">
            @if ($competencyCategory->category_name == 'Core Competencies')
                <h1 class="mb-3">Organizational / {{ str_replace('ies', 'y', $competencyCategory->category_name) }}</h1>
            @else
                <h1 class="mb-3">{{ str_replace('ies', 'y', $competencyCategory->category_name) }}</h1>
            @endif


            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted text-center flex-grow-1 my-auto">Complete the form by clicking on the button to the left
                    of your selected rating. All questions are required and must be answered.</p>
                <button id="ratingScaleInfo" class="btn text-light fs-responsive my-auto ml-2" data-bs-toggle="modal"
                    data-bs-target="#ratingScaleModal">
                    <i class="fas fa-info-circle"></i>
                    <span class="rating-scale-text"> Rating Scale</span>
                </button>
            </div>
        </div>

        <form method="post"
            action="{{ route('competency_assessment.form', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => $competencyCategory->id]) }}"
            class="needs-validation" novalidate>
            @csrf
            @php
                $sortedItems = $filteredItemsByCategory->sortBy(function ($item) {
                    return $item->behavioralIndicator->competency->name;
                });
                $levelMapping = ['1' => 'Basic', '2' => 'Intermediate', '3' => 'Advanced', '4' => 'Superior'];
            @endphp

            @foreach ($sortedItems->groupBy(function ($item) {
            return $item->behavioralIndicator->competency_id;
        }) as $key => $items)
                @php
                    $displayedLevels = [];
                @endphp
                <div class="card mb-4">



                    <div class="card-header text-center">
                        <h3 class="card-title" id="competency-{{ $items->first()->behavioralIndicator->competency->id }}">
                            <strong>
                                {{ $items->first()->behavioralIndicator->competency->name }}</strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-7">
                            </div>
                            <div class="col-lg-5 col-md-5 rating-label-col fw-bolder">
                                <div class="row align-items-end" style="min-height: 90px;">
                                    <div class="col mb-0 rating-label-container" id="label-1">
                                        <label class="rating-label">Never</label>
                                    </div>
                                    <div class="col mb-0 rating-label-container" id="label-2">
                                        <label class="rating-label">Rarely</label>
                                    </div>
                                    <div class="col mb-0 rating-label-container" id="label-3">
                                        <label class="rating-label">Sometimes</label>
                                    </div>
                                    <div class="col mb-0 rating-label-container" id="label-4">
                                        <label class="rating-label">Frequently</label>
                                    </div>
                                    <div class="col mb-0 rating-label-container" id="label-5">
                                        <label class="rating-label">Always</label>
                                    </div>
                                    @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
                                        <div class="col mb-0 mx-0 self-rating">
                                            <label>Employee's Self-Rating</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @foreach ($items as $item)
                            @php
                                $currentLevel = $item->behavioralIndicator->level;
                            @endphp
                            @if (!in_array($currentLevel, $displayedLevels))
                                <div class="row">
                                    <div class="col">
                                        @if ($currentLevel != 1)
                                            <hr style="border-top: 4px solid #1E4387;">
                                        @endif
                                        <h4><strong>{{ $items->first()->behavioralIndicator->competency->name }}
                                                ({{ $levelMapping[$currentLevel] ?? 'Unknown Level' }})
                                            </strong></h4>
                                    </div>
                                </div>
                                @php
                                    $displayedLevels[] = $currentLevel;
                                @endphp
                            @endif
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <p class="form-question-text">{{ $item->behavioralIndicator->description }}</p>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="row">
                                        @for ($i = 0; $i < 5; $i++)
                                            <div class="col numbered-items">
                                                <div class="form-check fw-bold">
                                                    <input class="form-check-input" type="radio"
                                                        name="rating[{{ $item->behavioralIndicator->id }}]"
                                                        id="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}"
                                                        value="{{ $i }}"
                                                        {{ isset($item->score) && $item->score == $i ? 'checked' : '' }}
                                                        {{ $competencyAssessmentCompleted ? 'disabled' : '' }} required>
                                                    <p class="fw-bolder d-none d-xl-block rating-number">{{ $i }}</p>
                                                    <label class="form-check-label d-block d-xl-none"
                                                        for="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}">
                                                        {{ ['Never', 'Rarely', 'Sometimes', 'Frequently', 'Always'][$i] }}
                                                    </label>
                                                    <label class="form-check-label d-none d-lg-block"
                                                        for="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}"></label>
                                                </div>
                                            </div>
                                        @endfor
                                        @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
                                            <div class="col">
                                                <div class="card align-items-center mx-0 d-flex justify-content-center">
                                                    <p class="fw-bolder d-none d-xl-block rating-number" style="padding-top:10px;"><strong>{{ $item->selfAssessmentScore }}</strong></p>
                                                </div>
                                                <label class="form-check-label d-block d-xl-none fw-bold">
                                                Self-Assessment Score({{ $item->selfAssessmentScore }})
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            @endforeach
            <div class="row text-center">
                <div class="col">
                    <p>Kindly review your answers before submitting. Ratings can no longer be changed and updated after
                        submission.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                        class="btn btn-md btn-outline-dark mt-2">Submit & go back to My Checklist</a>
                </div>
                <div class="col text-end">
                    @if ($competencyAssessmentCompleted)
                        <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                            class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Next</a>
                    @else
                        <button type="submit" name="action" value="save" class="btn btn-md mt-2 text-light"
                            style="background-color:#1E4387;">Save</button>
                        <button type="submit" class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Submit &
                            Continue</button>
                    @endif
                </div>
            </div>
        </form>

        <button onclick="scrollToTop()" class="btn btn-xs"
            style="position: fixed; bottom: 110px; right: 1px; z-index: 2000;background-color:#1E4387; color:#fff;">
            <i class="fa fa-arrow-up"></i>
        </button>

        <button onclick="scrollToBottom()" class="btn btn-xs"
            style="position: fixed; bottom: 80px; right: 1px; z-index: 2000;background-color:#1E4387; color:#fff;">
            <i class="fa fa-arrow-down"></i>
        </button>

        <div class="modal fade " id="ratingScaleModal" tabindex="-1" aria-labelledby="ratingScaleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ratingScaleModalLabel">Rating Scale</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">RATING</th>
                                        <th scope="col"></th>
                                        <th scope="col">INTERPRETATION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>ALWAYS</td>
                                        <td>The behavior is demonstrated ALL THE TIME in performing one's job, even if the
                                            situation does not call for it; behavior is considered an epitome that is worth
                                            emulating, and may already coach or mentor others for this particular behavior
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>FREQUENTLY</td>
                                        <td>The behavior is demonstrated MOST OF THE TIME in performing the job; expect to
                                            exhibit the behavior during expected situations at work; could demonstrate
                                            behavior independently, without much supervision.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SOMETIMES</td>
                                        <td>The behavior is demonstrated EVERY ONCE IN A WHILE/OCCASIONALLY in performing
                                            the job; may or may not exhibit the behavior during expected situations at work,
                                            and relies on supervision or guidance from time to time.</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>RARELY</td>
                                        <td>The behavior is SELDOM demonstrated; cannot expect to exhibit the behavior when
                                            a situation calls for it; relies heavily on supervision or guidance</td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td>NEVER</td>
                                        <td>The behavior is NOT being demonstrated in performing the job; cannot exhibit the
                                            behavior when the situation at work calls for it.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");
        const radioGroups = document.querySelectorAll(".row.mb-3.align-items-center"); // Each question group
        const submitButtons = form.querySelectorAll("button[type='submit']");

        submitButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                let isValid = true;
                let firstUnanswered = null;

                radioGroups.forEach(group => {
                    const radios = group.querySelectorAll("input[type='radio']");
                    const isChecked = Array.from(radios).some(radio => radio.checked);

                    if (!isChecked) {
                        isValid = false;

                        // Store first unanswered question to scroll to
                        if (!firstUnanswered) {
                            firstUnanswered = group;
                        }

                        // Highlight the unanswered question
                        group.style.border = "2px solid red";
                        setTimeout(() => group.style.border = "", 3000);
                    }
                });

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission

                    // Show an alert message
                    alert("⚠️ Please answer all questions before submitting!");

                    // Scroll smoothly to the first unanswered question
                    firstUnanswered.scrollIntoView({ behavior: "smooth", block: "center" });
                }
            });
        });
    });
</script>


    </div>
@endsection
