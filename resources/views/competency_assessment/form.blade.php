@extends('layouts.app-master')

@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="mb-3">{{ $competencyCategory->category_name }}</h1>
            <p class="text-muted">Complete the form by selecting your rating. All questions are required and must be
                answered.</p>
        </div>
        <div class="d-none d-lg-block text-end">
            <span class="mx-2">Never</span>
            <span class="mx-2">Rarely</span>
            <span class="mx-2">Sometimes</span>
            <span class="mx-2">Frequently</span>
            <span class="mx-2">Always</span>
        </div>
        <form method="post"
            action="{{ route('competency_assessment.form', ['employee' => $employee, 'id' => $competencyAssessment->id, 'categoryId' => $competencyCategory->id]) }}"
            class="needs-validation" novalidate>
            @csrf

            @foreach ($filteredItemsByCategory->groupBy(function ($item) {
            return $item->behavioralIndicator->competency_id;
        }) as $key => $items)
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0"
                            id="competency-{{ $items->first()->behavioralIndicator->competency->id }}">
                            {{ $items->first()->behavioralIndicator->competency->name }}</h3>
                       
                    </div>
                    <div class="card-body">
                        @foreach ($items as $item)
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <p>{{ $item->behavioralIndicator->description }}</p>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="row">
                                        @for ($i = 0; $i < 5; $i++)
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="rating[{{ $item->behavioralIndicator->id }}]"
                                                        id="rating-{{ $item->behavioralIndicator->id }}-{{ $i }}"
                                                        value="{{ $i }}"
                                                        {{ isset($item->score) && $item->score == $i ? 'checked' : '' }}
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
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary">Back</button>
                <button type="submit" class="btn btn-primary">Submit & Continue</button>
            </div>
        </form>

        <button onclick="scrollToTop()" class="btn-scroll-top"
            style="position: fixed; bottom: 100px; right: 20px; z-index: 1000;">
            <i class="fa fa-arrow-up"></i>
        </button>

        <button onclick="scrollToBottom()" class="btn-scroll-bottom"
            style="position: fixed; bottom: 50px; right: 20px; z-index: 1000;">
            <i class="fa fa-arrow-down"></i>
        </button>

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
