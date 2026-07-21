@extends('layouts.compass')

@section('compass-content')
<div class="container-fluid mt-2 p-5 bg-white rounded">
    @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
        <div class="container-fluid rounded p-4 mb-4 text-white" style="background-color: #1E4387;">
            <h6><strong>You are currently evaluating:</strong> {{ $employee->firstname }} {{ $employee->lastname }}</h6>
            <h6><strong>Employee's Position:</strong> {{ $employee->position->name }}</h6>
        </div>
    @endif

    <h1 class="text-center mb-4">Professional Development Action Plan (PDAP)</h1>

    <form id="pdapExtendedForm" action="{{ route('competency_assessment.save.pdap_extended', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" method="POST">
        @csrf

        <h5 class="mb-3">C. Non-Training Interventions</h5>

        <img src="{{ asset('images/approach.png') }}"
             class="img-fluid mt-3"
             style="cursor: pointer;"
             data-bs-toggle="modal"
             data-bs-target="#imagePreviewModal"
             alt="Job Family Profile Image">

        <div>
            <table class="table mt-3 table-striped shadow-lg bdr">
                <thead style="background-color:#F1F3F9;">
                    <tr>
                        <th>
                            Type of Activity
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="Category of development: Experience, Exposure, or Education.">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>
                            Development Actions
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="Planned interventions to develop competencies.">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>
                            Measures / Target Dates
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="How success will be measured or when it’s due.">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>
                            By whom
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="Person responsible for the action.">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>
                            Status
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="Progress status (Ongoing or Done).">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>
                            Supervisor Notes
                            <span tabindex="0" class="ms-1" data-bs-toggle="tooltip" title="Optional input from the supervisor.">
                                <i class="fa fa-question-circle text-dark"></i>
                            </span>
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        'experience' => 'Experience on-the-job (70%)',
                        'exposure' => 'Exposure to others (20%)',
                        'education' => 'Education and Formal Training (10%)'
                    ] as $activityType => $label)
                        <tr>
                            <td>{{ $label }}</td>

                            <td>
                                <textarea name="developmentActivities[{{ $activityType }}][action]" class="form-control required-field edit-field text-start force-left" rows="3" placeholder="Development Actions" readonly>{{ old("developmentActivities.$activityType.action", $pdap[$activityType.'_action'] ?? '') }}</textarea>
                            </td>

                            <td>
                                <textarea name="developmentActivities[{{ $activityType }}][measures]" class="form-control required-field edit-field text-start force-left" rows="3" placeholder="Measures / Target Dates" readonly>{{ old("developmentActivities.$activityType.measures", $pdap[$activityType.'_measures'] ?? '') }}</textarea>
                            </td>

                            <td>
                                <input type="text" name="developmentActivities[{{ $activityType }}][by_whom]" class="form-control required-field edit-field text-start force-left" placeholder="By whom" value="{{ old("developmentActivities.$activityType.by_whom", $pdap[$activityType.'_by_whom'] ?? '') }}" readonly>
                            </td>

                            <td style="width: 150px;">
                                <select name="developmentActivities[{{ $activityType }}][status]" class="form-control required-field status-field" disabled>
                                    @php
                                        $statusValue = old("developmentActivities.$activityType.status", $pdap[$activityType.'_status'] ?? 'Ongoing');
                                    @endphp
                                    <option value="Ongoing" {{ $statusValue == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                    <option value="Done" {{ $statusValue == 'Done' ? 'selected' : '' }}>Done</option>
                                </select>
                            </td>

                            <td>
                                <textarea name="developmentActivities[{{ $activityType }}][supervisor_notes]" class="form-control supervisor-field text-start force-left" rows="3" placeholder="Supervisor Notes" @if($session_type !== 'employee_assessment') readonly @endif>{{ old("developmentActivities.$activityType.supervisor_notes", $pdap[$activityType.'_supervisor_notes'] ?? '') }}</textarea>
                            </td>

                            <td>
                                <button type="button" class="btn btn-outline-default btn-sm text-white edit-action-btn brand-color-bg">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('competency_assessment.pdap', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-md mt-2 btn-outline-dark">Back</a>
            <div>
                <button type="submit" id="saveButton" class="btn btn-md mt-2 text-light brand-color-bg" name="submit_action" value="save">Save</button>
                <button type="submit" id="submitButton" class="btn btn-md mt-2 text-light brand-color-bg" name="submit_action" value="submit">Submit & Continue</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
       const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl, {
                    container: 'body',
                    placement: 'auto',
                    fallbackPlacements: ['top', 'bottom', 'right', 'left'],
                    boundary: 'viewport'
                });
            });


        $('.edit-action-btn').click(function () {
            const isEditing = $(this).data('editing') || false;
            const $icon = $(this).find('i');
            const $row = $(this).closest('tr');
            const userRole = "{{ $session_type }}";

            const $supervisorField = $row.find('.supervisor-field');
            const $allFields = $row.find('.edit-field, .status-field');

            $(this).data('editing', !isEditing);
            $icon.toggleClass('fa-edit fa-times');

            if (isEditing) {
                $allFields.prop('readonly', true);
                $row.find('.status-field').prop('disabled', true);
            } else {
                $allFields.prop('readonly', false);
                $row.find('.status-field').prop('disabled', false);
                if (userRole === "self_assessment") {
                    $supervisorField.prop('readonly', true);
                } else {
                    $supervisorField.prop('readonly', false);
                }
            }
        });

       $('#saveButton, #submitButton').click(function (event) {
            let formValid = true;

            $('.required-field').each(function () {
                const isSupervisorNote = $(this).hasClass('supervisor-field');

                if (!isSupervisorNote && !$(this).val().trim()) {
                    $(this).addClass('is-invalid');
                    formValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            if (!formValid) {
                event.preventDefault();
                const firstInvalid = $(".is-invalid").first();
                $('html, body').animate({ scrollTop: firstInvalid.offset().top - 100 }, 'smooth');
                firstInvalid.focus();
            }
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#pdapExtendedForm');

        form.setAttribute('novalidate', true); // Disable native browser validation

        form.addEventListener('submit', function (event) {
            let valid = true;

            // Validate all required fields except supervisor_notes
            const requiredFields = form.querySelectorAll('.required-field:not(.supervisor-field)');
            requiredFields.forEach(function (field) {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    valid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!valid) {
                event.preventDefault();
                event.stopPropagation();

                // Scroll to the first invalid field
                const firstInvalid = form.querySelector('.is-invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
            }

            form.classList.add('was-validated');
        });
    });
</script>

@endsection

<!-- ✅ Fullscreen Modal Preview -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-transparent border-0 position-relative" style="pointer-events: auto;">
            <div class="position-absolute top-0 end-0 m-3" style="z-index: 1056;">
                <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal" aria-label="Close" style="border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">&times;</button>
            </div>
            <div class="modal-body p-0 m-0 d-flex justify-content-center align-items-center" style="background: transparent;">
                <img src="{{ asset('images/approach.png') }}" alt="Approach Full Preview" style="width: 1400px; height: auto; object-fit: contain; pointer-events: none;">
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.tooltip {
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

