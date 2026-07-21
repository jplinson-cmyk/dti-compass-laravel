@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
            <div class="container-fluid rounded p-4 mb-4 text-white" style="background-color: #1E4387;">
                <h6>
                    <strong>You are currently evaluating:</strong>
                    <span>{{ $employee->firstname }} {{ $employee->lastname }}</span>
                </h6>
                <h6>
                    <strong>Employee's Position:</strong>
                    <span>{{ $employee->position->name }}</span>
                </h6>
            </div>
        @endif

        <h1 class="text-center mb-4">Professional Development Action Plan (PDAP)</h1>
        <form 
            action="{{ route('competency_assessment.save.pdap', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" 
            method="POST" 
            class="needs-validation" 
            novalidate>

            @csrf

            <h5 class="mb-3">A. Development Needs Assessment</h5>
            <p>
                Based on your result of the Competency Assessment, identify the mission-critical competencies that you would like to focus on developing in the drop-down list.
            </p>

            @foreach (['A', 'B', 'C', 'D'] as $priority)
                <div class="mb-3">
                    <label for="priority_{{ strtolower($priority) }}" class="form-label fw-bold">
                        Priority {{ $priority }}
                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Select a mission-critical competency you need to improve.">
                            <i class="fa fa-question-circle text-dark ms-1"></i>
                        </span>
                    </label>
                    <select 
                        name="priority_{{ strtolower($priority) }}" 
                        id="priority_{{ strtolower($priority) }}" 
                        class="form-select" 
                        required
                        {{ $session_type == 'employee_assessment' ? 'readonly' : '' }}>
                        <option value="">Select Competency</option>
                        @foreach ($competencies ?? [] as $competency)
                            <option value="{{ $competency->id }}" 
                                {{ old("priority_" . strtolower($priority), $savedData["priority_" . strtolower($priority)] ?? '') == $competency->id ? 'selected' : '' }}>
                                {{ $competency->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <div class="mb-3">
                <label for="skills_to_acquire" class="form-label fw-bold">
                    Please specify what kind of knowledge or skills you would like to acquire:
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Describe the specific skills or knowledge you wish to gain to improve performance.">
                        <i class="fa fa-question-circle text-dark ms-1"></i>
                    </span>
                </label>
                <textarea 
                    name="skills_to_acquire" 
                    id="skills_to_acquire" 
                    class="form-control" 
                    required
                    {{ $session_type == 'employee_assessment' ? 'readonly' : '' }}>{{ old('skills_to_acquire', $savedData['skills_to_acquire'] ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="supervisor_notes" class="form-label fw-bold">
                    Supervisor Notes:
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Supervisor's observations or recommendations regarding the employee's development.">
                        <i class="fa fa-question-circle text-dark ms-1"></i>
                    </span>
                </label>
                <textarea 
    name="supervisor_notes"
    id="supervisor_notes"
    class="form-control"
    @if (!auth()->user()->hasRole('supervisor') || $session_type !== 'employee_assessment') readonly @endif
>{{ old('supervisor_notes', $savedData['supervisor_notes'] ?? '') }}</textarea>

            </div>

            <div class="job-family-profile">
                <h5 class="mb-3">B. Job Family Profile</h5>

                <img src="{{ asset('images/job-families.png') }}"
                     class="img-fluid mt-3"
                     style="cursor: pointer;"
                     data-bs-toggle="modal"
                     data-bs-target="#imagePreviewModal"
                     alt="Job Family Profile Image">

                <p>
                    Select which job family you belong to:
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Select the group that best represents your current job role or the role you aspire to.">
                        <i class="fa fa-question-circle text-dark ms-1"></i>
                    </span>
                </p>

                <label for="job_family" class="form-label fw-bold">Job Family</label>
                <select 
                    name="job_family" 
                    id="job_family" 
                    class="form-control" 
                    required
                    {{ $session_type == 'employee_assessment' ? 'readonly' : '' }}>
                    <option value="">Select Job Family</option>
                    @foreach($jobFamilies ?? [] as $family)
                        <option value="{{ $family->id }}" 
                            {{ old('job_family', $savedData['job_family_id'] ?? '') == $family->id ? 'selected' : '' }}>
                            {{ $family->name }}
                        </option>
                    @endforeach
                </select>

                <p>
                    Select a competency from your chosen job family:
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="This list is based on the Job Family you selected above.">
                        <i class="fa fa-question-circle text-dark ms-1"></i>
                    </span>
                </p>

                <label for="job_family_competency" class="form-label fw-bold">Job Family Competency</label>
                <select 
                    name="job_family_competency" 
                    id="job_family_competency" 
                    class="form-control" 
                    required
                    {{ $session_type == 'employee_assessment' ? 'readonly' : '' }}>
                    <option value="">Select Job Family First</option>
                </select>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                    class="btn btn-md mt-2 btn-outline-dark">Back to Summary of Rating</a>

                <div>
                    <button type="submit" class="btn btn-md mt-2 text-light brand-color-bg" name="save" value="save">Save</button>
                    <button type="submit" class="btn btn-md mt-2 text-light brand-color-bg" name="submit" value="submit">Submit & Continue</button>
                </div>
            </div>
        </form>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('.needs-validation');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();

                // Scroll to the first invalid field
                const firstInvalid = form.querySelector(':invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
            }

            form.classList.add('was-validated');
        }, false);
    });
</script>




    <!-- ✅ Tooltip and logic script -->
    <script>
        $(document).ready(function () {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl, {
                container: 'body',       // Needed to escape layout containers
                placement: 'auto',       // Allows Bootstrap to reposition based on space
                fallbackPlacements: ['top', 'bottom', 'right', 'left'],
                boundary: 'viewport'     // Ensures it doesn’t get cut off
            });
        });

            // Existing competency logic
            let selectedJobFamily = $('#job_family').val();
            let selectedJobFamilyCompetency = "{{ old('job_family_competency', $savedData['job_family_competency_id'] ?? '') }}";

            function loadCompetencies(jobFamilyId, selectedCompetency = null) {
                if (!jobFamilyId) {
                    $('#job_family_competency').prop('disabled', true).html('<option value="">Select Job Family First</option>');
                    return;
                }

                $.ajax({
                    url: '{{ route("get.job.family.competencies") }}',
                    type: 'GET',
                    data: { job_family_id: jobFamilyId },
                    beforeSend: function () {
                        $('#job_family_competency').prop('disabled', true).html('<option>Loading...</option>');
                    },
                    success: function (response) {
                        $('#job_family_competency').empty();
                        if (response.competencies && response.competencies.length > 0) {
                            $('#job_family_competency').append('<option value="">Select Competency</option>');
                            response.competencies.forEach(function (comp) {
                                let isSelected = selectedCompetency == comp.id ? 'selected' : '';
                                $('#job_family_competency').append(new Option(comp.name, comp.id, false, isSelected));
                            });
                            $('#job_family_competency').prop('disabled', false);
                        } else {
                            $('#job_family_competency').append('<option>No competencies found</option>');
                        }
                    },
                    error: function (xhr) {
                        console.error('Error fetching competencies:', xhr.responseText);
                    }
                });
            }

            $('#job_family').change(function () {
                loadCompetencies($(this).val());
            });

            if (selectedJobFamily) {
                loadCompetencies(selectedJobFamily, selectedJobFamilyCompetency);
            }

            if ("{{ $session_type }}" === "employee_assessment") {
                $('form input, form textarea, form select').attr('readonly', true);
                $('form select').prop('disabled', true);
                $('#supervisor_notes').prop('readonly', false);
            }
        });
    </script>
@endsection

<!-- Image Preview Modal -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-transparent border-0 position-relative" style="pointer-events: auto;">
            <div class="position-absolute top-0 end-0 m-3" style="z-index: 1056; pointer-events: auto;">
                <button type="button"
                        class="btn btn-light btn-sm"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        style="border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    &times;
                </button>
            </div>
            <div class="modal-body p-0 m-0 d-flex justify-content-center align-items-center"
                 style="background: transparent;">
                <img src="{{ asset('images/job-families.png') }}"
                     alt="Job Family Full Preview"
                     style="width: 1000px; height: auto; object-fit: contain; pointer-events: none;">
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .tooltip {
        z-index: 20000 !important;
    }

    .tooltip-inner {
        background-color: #000;
        color: #fff;
        font-size: 0.875rem;
        padding: 6px 10px;
        border-radius: 4px;
    }

    .tooltip-arrow {
        z-index: 20000 !important;
    }

    body, html {
        overflow-x: visible !important;
        overflow-y: visible !important;
    }

    .container-fluid {
        overflow: visible !important;
        position: relative !important;
        z-index: 1;
    }
</style>
@endpush
