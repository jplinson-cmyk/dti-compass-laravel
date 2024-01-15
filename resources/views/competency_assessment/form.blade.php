@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        <div class="text-center mb-5">
            @if($competencyCategory->category_name == 'Core Competencies')
                <h1 class="mb-3">Organizational / {{ str_replace('ies', 'y',$competencyCategory->category_name) }}</h1>
            @else
                <h1 class="mb-3">{{ str_replace('ies', 'y',$competencyCategory->category_name) }}</h1>
            @endif
            <p class="text-muted">Complete the form by clicking on the button to the left of your selected rating. All questions are required and must be answered.</p>

            <div class="text-end">
                <a id="ratingScaleInfo" class="btn text-light"  data-bs-toggle="modal"
                    data-bs-target="#ratingScaleModal">
                    <i class="fas fa-info-circle"></i> Rating Scale
                </a>
            </div>

        </div>

        <div class="rating-labels d-flex justify-content-end">
            <span class="rating-label mx-2 mb-5" style="transform: rotate(-60deg);">
                0-Never
            </span>
            <span class="rating-label mx-2 mb-5" style="transform: rotate(-60deg);">
                1-Rarely
            </span>
            <span class="rating-label mx-2 mb-5" style="transform: rotate(-60deg);">
                2-Sometimes
            </span>
            <span class="rating-label mx-2 mb-5" style="transform: rotate(-60deg);">
                3-Frequently
            </span>
            <span class="rating-label mx-2 mb-5" style="transform: rotate(-60deg);">
                4-Always
            </span>
            @if(auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
                <span class="rating-label mx-2">
                     Self-Assessment Score
                </span>
            @endif
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
                    <div class="card-header text-center" >
                        <h3 class="card-title"
                            id="competency-{{ $items->first()->behavioralIndicator->competency->id }}">
                            {{ $items->first()->behavioralIndicator->competency->name }}</h3>
                    </div>
                    <div class="card-body">

                        @foreach ($items as $item)
                            @php
                                $currentLevel = $item->behavioralIndicator->level;
                            @endphp
                            @if (!in_array($currentLevel, $displayedLevels))
                                <div class="row">
                                    <div class="col">
                                        @if($currentLevel!=1)
                                        <hr style="border-top: 4px solid #1E4387;">
                                        @endif
                                        <h4>{{ $items->first()->behavioralIndicator->competency->name }} ({{ $levelMapping[$currentLevel] ?? 'Unknown Level' }})</h4>
                                    </div>
                                </div>
                                @php
                                    $displayedLevels[] = $currentLevel;
                                @endphp
                            @endif
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <p>{{ $item->behavioralIndicator->description }}</p>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="row">
                                        @for ($i = 0; $i < 5; $i++)
                                            <div class="col">
                                                <div class="form-check fw-bold">{{$i}}
                                                    <input class="form-check-input" type="radio"
                                                        name="rating[{{ $item->behavioralIndicator->id }}]"
                                                        id="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}"
                                                        value="{{ $i }}"
                                                        {{ isset($item->score) && $item->score == $i ? 'checked' : '' }}
                                                        {{$competencyAssessmentCompleted ? 'disabled' : ''}}
                                                        required>
                                                    <label class="form-check-label d-block d-lg-none"
                                                        for="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}">
                                                        {{ ['Never', 'Rarely', 'Sometimes', 'Frequently', 'Always'][$i] }}
                                                    </label>
                                                    <label class="form-check-label d-none d-lg-block"
                                                        for="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}"></label>
                                                </div>
                                            </div>
                                        @endfor
                                        @if(auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
                                        <div class="col">
                                            <span>{{ $item->selfAssessmentScore }}</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col">
                    <a href="{{ route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                        class="btn btn-lg btn-outline-dark mt-2">Submit & go back to My Checklist</a>
                </div>
                <div class="col text-end">
                    @if ($competencyAssessmentCompleted)
                    <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                        class="btn btn-lg mt-2 text-light" style="background-color:#1E4387;">Next</a>
                    @else
                        <button type="submit" name="action" value="save" class="btn btn-lg mt-2 text-light" style="background-color:#1E4387;">Save</button>
                        <button type="submit" class="btn btn-lg mt-2 text-light" style="background-color:#1E4387;">Submit & Continue</button>
                    @endif
                </div>
            </div>
        </form>

        <button onclick="scrollToTop()" class="btn btn-lg btn-outline-primary"
            style="position: fixed; bottom: 100px; right: 20px; z-index: 2000;">
            <i class="fa fa-arrow-up"></i>
        </button>

        <button onclick="scrollToBottom()" class="btn btn-lg btn-outline-primary"
            style="position: fixed; bottom: 50px; right: 20px; z-index: 2000;">
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
        </script>
    </div>
@endsection
