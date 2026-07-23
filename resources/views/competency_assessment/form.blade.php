@extends('layouts.compass')

@section('compass-content')
    <style>
        .competency-rating-table-wrapper {
            border: 1px solid #cfd8e3;
            border-radius: 4px;
            overflow: hidden;
        }

        .competency-rating-table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        .competency-rating-table th,
        .competency-rating-table td {
            border: 1px solid #cfd8e3 !important;
            vertical-align: middle;
        }

        .competency-rating-table .competency-level-header th {
            padding: 16px 10px;
            background-color: #dbe8ff;
            color: #17212b;
            font-weight: 700;
            text-align: center;
        }

        .competency-rating-table .competency-level-header .statement-column {
            width: 45%;
            padding-left: 24px;
            text-align: left;
        }

        .competency-rating-table .statement-cell {
            padding: 18px 16px;
            background-color: #ffffff;
            line-height: 1.5;
            text-align: left;
        }

        .competency-rating-table .rating-cell {
            position: relative;
            height: 74px;
            padding: 0;
            background-color: #ffffff;
            text-align: center;
            vertical-align: middle;
        }

        .competency-rating-table .rating-radio {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            width: 1.35rem;
            height: 1.35rem;
            margin: 0;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        .competency-rating-table .rating-radio:checked {
            background-color: #1e4387;
            border-color: #1e4387;
        }

        .competency-rating-table .rating-cell-label {
            position: absolute;
            inset: 0;
            z-index: 1;
            display: block;
            margin: 0;
            cursor: pointer;
        }

        .competency-rating-table .rating-cell:hover {
            background-color: #f4f7fb;
        }

        .competency-rating-table .rating-cell:has(.rating-radio:checked) {
            background-color: #edf3f9;
        }

        .competency-rating-table .self-rating-cell {
            padding: 16px 10px;
            background-color: #ffffff;
            text-align: center;
        }

        @media (max-width: 991.98px) {
            .competency-rating-table {
                min-width: 900px;
            }

            .competency-rating-table .competency-level-header .statement-column {
                width: 380px;
            }
        }
    </style>

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

            <div class="accordion mb-4" id="competencyAccordion">
                @foreach ($sortedItems->groupBy(function ($item) {
                    return $item->behavioralIndicator->competency_id;
                }) as $key => $items)

                    @php
                        $displayedLevels = [];
                        $competency = $items->first()->behavioralIndicator->competency;
                        $accordionId = 'competency-collapse-' . $competency->id;
                        $headingId = 'competency-heading-' . $competency->id;
                    @endphp

                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header" id="{{ $headingId }}">
                            <button
                                class="accordion-button collapsed fw-bold"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $accordionId }}"
                                aria-expanded="false"
                                aria-controls="{{ $accordionId }}"
                            >
                                {{ $competency->name }}
                            </button>
                        </h2>

                        <div
                            id="{{ $accordionId }}"
                            class="accordion-collapse collapse"
                            aria-labelledby="{{ $headingId }}"
                        >
                            <div class="accordion-body">
                                <div class="table-responsive competency-rating-table-wrapper">
                                    <table class="table competency-rating-table mb-0">
                                        <tbody>
                                            @foreach ($items as $item)
                                                @php
                                                    $currentLevel = $item->behavioralIndicator->level;

                                                    $hasSelfRating =
                                                        auth()->user()->hasRole('supervisor') &&
                                                        $session_type == 'employee_assessment';

                                                    $columnCount = $hasSelfRating ? 7 : 6;
                                                @endphp

                                                @if (!in_array($currentLevel, $displayedLevels))
                                                    <tr class="competency-level-header">
                                                        <th class="statement-column">
                                                            {{ $competency->name }}
                                                            ({{ $levelMapping[$currentLevel] ?? 'Unknown Level' }})
                                                        </th>

                                                        <th>Never</th>
                                                        <th>Rarely</th>
                                                        <th>Sometimes</th>
                                                        <th>Frequently</th>
                                                        <th>Always</th>

                                                        @if ($hasSelfRating)
                                                            <th>Employee's Self-Rating</th>
                                                        @endif
                                                    </tr>

                                                    @php
                                                        $displayedLevels[] = $currentLevel;
                                                    @endphp
                                                @endif

                                                <tr class="assessment-question">
                                                    <td class="statement-cell">
                                                        {{ $item->behavioralIndicator->description }}
                                                    </td>

                                                    @for ($i = 0; $i < 5; $i++)
                                                        @php
                                                            $radioId =
                                                                'rating-' .
                                                                $item->behavioralIndicator->id .
                                                                '-' .
                                                                $i;
                                                        @endphp

                                                        <td class="rating-cell">
                                                            <input class="form-check-input rating-radio"
                                                                type="radio"
                                                                name="rating[{{ $item->behavioralIndicator->id }}]"
                                                                id="{{ $radioId }}"
                                                                value="{{ $i }}"
                                                                {{ isset($item->score) && $item->score == $i ? 'checked' : '' }}
                                                                {{ $competencyAssessmentCompleted ? 'disabled' : '' }}
                                                                required
                                                            >

                                                            <label class="rating-cell-label" for="{{ $radioId }}" aria-label="{{ ['Never', 'Rarely', 'Sometimes', 'Frequently', 'Always'][$i] }}"></label>
                                                        </td>
                                                    @endfor

                                                    @if ($hasSelfRating)
                                                        <td class="self-rating-cell">
                                                            <strong>{{ $item->selfAssessmentScore }}</strong>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

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
            style="position: fixed; bottom: 110px; right: 15px; z-index: 2000;background-color:#1E4387; color:#fff;">
            <i class="fa fa-arrow-up"></i>
        </button>

        <button onclick="scrollToBottom()" class="btn btn-xs"
            style="position: fixed; bottom: 80px; right: 15px; z-index: 2000;background-color:#1E4387; color:#fff;">
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
        const radioGroups = document.querySelectorAll(".assessment-question");; // Each question group
        const submitButtons = form.querySelectorAll("button[type='submit']");

        const accordionSections = document.querySelectorAll(".accordion-collapse");

        accordionSections.forEach(section => {
            section.addEventListener("shown.bs.collapse", function () {
                const accordionItem = section.closest(".accordion-item");

                accordionItem.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            });
        });

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
                    const collapsedSection = firstUnanswered.closest(".accordion-collapse");
                        if (collapsedSection) {
                            const accordionCollapse =
                                bootstrap.Collapse.getOrCreateInstance(collapsedSection, {
                                    toggle: false
                                });

                            accordionCollapse.show();

                            collapsedSection.addEventListener("shown.bs.collapse", function scrollToQuestion() {
                                firstUnanswered.scrollIntoView({
                                    behavior: "smooth",
                                    block: "center"
                                });

                                collapsedSection.removeEventListener(
                                    "shown.bs.collapse",
                                    scrollToQuestion
                                );
                            });
                        }
                }
            });
        });
    });
</script>


    </div>
@endsection
