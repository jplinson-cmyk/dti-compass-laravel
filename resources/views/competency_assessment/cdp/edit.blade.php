@extends('layouts.compass')
@php
    $isSupervisorMode = ($session_type == 'employee_assessment');
    $isEmployeeMode = ($session_type == 'self_assessment');

    function fieldAccess($canEdit) {
        return $canEdit ? '' : 'readonly';
    }

    function selectAccess($canEdit) {
        return $canEdit ? '' : 'style="pointer-events: none; background-color: #e9ecef;"';
    }
@endphp
@section('compass-content')
    <style>
        .is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            margin-top: 0.25rem;
        }
    </style>
    <div class="container-fluid mt-2 p-5 bg-white rounded">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success fade show" role="alert" id="status-alert">
                {{ session('status') }}
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById('status-alert').style.display = 'none';
                }, 3000);
            </script>
        @endif
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
        <h1 class="text-center mb-4">CAREER DEVELOPMENT PLAN</h1>
        <p class="text-center mb-4">
            The Career Development Plan is a tool to assist you to identify and develop your competencies toward achieving
            your career goals.
        </p>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-white shadow-md">
                    <div class="card-body">
                        <p class="card-title fw-bolder ">Employee Name: <span
                                class="text-uppercase employee-name">{{ $employee->lastname }},
                                {{ $employee->firstname }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <form method="post"
            action="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
            class="needs-validation" id="cdpForm" novalidate>
            @csrf
            <div class="mb-4 row-space">
                <h6 class="fw-bold mb-4">1. Define your personal interests, values, and career goals for your future career
                    goals.
                </h6>
                <table class="table table-bordered table-hover shadow-lg bdr">
                    <thead style="background-color:#F1F3F9;">
                        <tr>
                            <th scope="col">Interests<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Ex. Visual arts, public speaking, managing events">
                                    <i class="fa fa-question-circle"></i>
                                </button>
                            </th>
                            <th scope="col">Values<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Ex. Honesty, integrity, courage, accountability">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>
                            <th scope="col">Career Goals<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Ex. Advance to a leadership position">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>
                            <th scope="col">Action<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="To unlock the text boxes for editing and to lock it again after editing, click on the icon under Actions adjacent to the row that you wish to edit.">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea name="interests" id="interests" class="form-control" rows="3" placeholder="Interests" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('interests')->value ?? '' }}</textarea>
                            </td>
                            <td>
                                <textarea name="values" id="values" class="form-control" rows="3" placeholder="Values" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('values')->value ?? '' }}</textarea>
                            </td>
                            <td>
                                <textarea name="careerGoals" id="careerGoals" class="form-control" rows="3" placeholder="Career Goals" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('careerGoals')->value ?? '' }}</textarea>
                            </td>


                            <td>
                                <button type="button"
                                    class="btn btn-outline-default btn-sm text-white edit-action-btn brand-color-bg"
                                    data-editing="false">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="mb-4 row-space">
                <h6 class="fw-bold mb-4">2. List your key competency strengths and key development gaps.</h6>
                <table class="table table-bordered table-hover shadow-lg bdr">
                    <thead style="background-color:#F1F3F9;">
                        <tr>
                            <th scope="col">Strengths<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Consider results from assessment tools. Development Needs Assessment, Individual Dashboard, Performance discussions, etc.">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>
                            <th scope="col">Development Gaps<button type="button" class="btn"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Consider results from assessment tools i.e. Development Needs Assessment, Individual Dashboard, Performance discussions, etc.">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>
                            <th scope="col">Action<button type="button" class="btn" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="To unlock the text boxes for editing and to lock it again after editing, click on the icon under Actions adjacent to the row that you wish to edit.">
                                    <i class="fa fa-question-circle"></i>
                                </button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea name="strengths" id="strengths" class="form-control" rows="3" placeholder="Strengths" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('strengths')->value ?? '' }}</textarea>
                            </td>
                            <td>
                                <textarea name="developmentGaps" id="developmentGaps" class="form-control" rows="3"
                                    placeholder="Development Gaps" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('developmentGaps')->value ?? '' }}</textarea>
                            </td>
                            <td>
                                <button type="button"
                                    class="btn btn-outline-default btn-sm text-white edit-action-btn brand-color-bg"
                                    data-editing="false">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-5 mt-5">
                <h1 class="text-center">PLANNING FOR DEVELOPMENT</h1>
            </div>

            <div class="mb-4">
                <div class="row">
                    <div class="col col-sm-12 col-md-6 row-spacing">
                        <h6 class="fw-bold">3. Identify your Role Aspiration.</h6>
                        <div class="mb-4 mt-4">
                        @php
                            // Fetch the stored values for each term
                            $shortTermPosition = $cdp->cdpProperties->where('key', 'shortTerm_position')->first()->value ?? '';
                            $shortTermBureauOffice = $cdp->cdpProperties->where('key', 'shortTerm_bureauOffice')->first()->value ?? '';

                            $mediumTermPosition = $cdp->cdpProperties->where('key', 'mediumTerm_position')->first()->value ?? '';
                            $mediumTermBureauOffice = $cdp->cdpProperties->where('key', 'mediumTerm_bureauOffice')->first()->value ?? '';

                            $longTermPosition = $cdp->cdpProperties->where('key', 'longTerm_position')->first()->value ?? '';
                            $longTermBureauOffice = $cdp->cdpProperties->where('key', 'longTerm_bureauOffice')->first()->value ?? '';
                        @endphp
                            <h6 class="fw-bold">Short Term (1-2 Years)</h6>
                            <div class="row mb-3">
                                <div class="col-6">
                                   <!-- Short Term -->
                                    <select class="form-select" name="aspirations[shortTerm][position]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value="" {{ $shortTermPosition == '' ? 'selected' : '' }}>Select Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}" {{ $shortTermPosition == $position->id ? 'selected' : '' }}>
                                                {{ $position->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[shortTerm][bureauOffice]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value=""
                                            {{ old('aspirations.shortTerm.bureauOffice', $cdp->cdpProperties->where('key', 'shortTerm_bureauOffice')->first()->value ?? '') == '' ? 'selected' : '' }}>
                                            Select Bureau/Office</option>
                                        @foreach ($bureauOffices as $bureauOffice)
                                            <option value="{{ $bureauOffice->id }}"
                                                {{ old('aspirations.shortTerm.bureauOffice', $cdp->cdpProperties->where('key', 'shortTerm_bureauOffice')->first()->value ?? '') == $bureauOffice->id ? 'selected' : '' }}>
                                                {{ $bureauOffice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mt-4">
                            <h6 class="fw-bold">Medium Term (3-5 Years)</h6>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[mediumTerm][position]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value=""
                                            {{ old('aspirations.mediumTerm.position', $cdp->cdpProperties->where('key', 'mediumTerm_position')->first()->value ?? '') == '' ? 'selected' : '' }}>
                                            Select Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}"
                                                {{ old('aspirations.mediumTerm.position', $cdp->cdpProperties->where('key', 'mediumTerm_position')->first()->value ?? '') == $position->id ? 'selected' : '' }}>
                                                {{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[mediumTerm][bureauOffice]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value=""
                                            {{ old('aspirations.mediumTerm.bureauOffice', $cdp->cdpProperties->where('key', 'mediumTerm_bureauOffice')->first()->value ?? '') == '' ? 'selected' : '' }}>
                                            Select Bureau/Office</option>
                                        @foreach ($bureauOffices as $bureauOffice)
                                            <option value="{{ $bureauOffice->id }}"
                                                {{ old('aspirations.mediumTerm.bureauOffice', $cdp->cdpProperties->where('key', 'mediumTerm_bureauOffice')->first()->value ?? '') == $bureauOffice->id ? 'selected' : '' }}>
                                                {{ $bureauOffice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mt-3">
                            <h6 class="fw-bold">Long Term (6-10 Years)</h6>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[longTerm][position]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value=""
                                            {{ old('aspirations.longTerm.position', $cdp->cdpProperties->where('key', 'longTerm_position')->first()->value ?? '') == '' ? 'selected' : '' }}>
                                            Select Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}"
                                                {{ old('aspirations.longTerm.position', $cdp->cdpProperties->where('key', 'longTerm_position')->first()->value ?? '') == $position->id ? 'selected' : '' }}>
                                                {{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[longTerm][bureauOffice]" {!! fieldAccess($isEmployeeMode) !!} required>
                                        <option value=""
                                            {{ old('aspirations.longTerm.bureauOffice', $cdp->cdpProperties->where('key', 'longTerm_bureauOffice')->first()->value ?? '') == '' ? 'selected' : '' }}>
                                            Select Bureau/Office</option>
                                        @foreach ($bureauOffices as $bureauOffice)
                                            <option value="{{ $bureauOffice->id }}"
                                                {{ old('aspirations.longTerm.bureauOffice', $cdp->cdpProperties->where('key', 'longTerm_bureauOffice')->first()->value ?? '') == $bureauOffice->id ? 'selected' : '' }}>
                                                {{ $bureauOffice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6 row-spacing-1">
                        <div class="mb-4">
                            <h6 class="fw-bold mb-4">5. Provide your mobility preferences and constraints to be
                                considered
                                for any
                                future career opportunities</h6>

                            <table class="table table-bordered table-hover shadow-lg bdr">
                                <thead style="background-color:#F1F3F9;">
                                    <tr>
                                        <th scope="col"><label for="mobilityPreferences" class="form-label">Mobility
                                                Preferences</label></th>
                                        <th scope="col">Action<button type="button" class="btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="To unlock the text boxes for editing and to lock it again after editing, click on the icon under Actions adjacent to the row that you wish to edit.">
                                                <i class="fa fa-question-circle"></i>
                                            </button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea name="mobilityPreferences" id="mobilityPreferences" class="form-control" rows="3"
                                                placeholder="Ex. Head Office, with little to no travel" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('mobilityPreferences')->value ?? '' }}</textarea>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-default btn-sm text-white edit-action-btn mt-2 brand-color-bg"
                                                data-editing="false">
                                                <i class="fa fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered table-hover shadow-lg bdr">
                                <thead style="background-color:#F1F3F9;">
                                    <tr>
                                        <th scope="col"> <label for="mobilityConstraints" class="form-label">Mobility
                                                Constraints</label></th>
                                        <th scope="col">Action<button type="button" class="btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="To unlock the text boxes for editing and to lock it again after editing, click on the icon under Actions adjacent to the row that you wish to edit.">
                                                <i class="fa fa-question-circle"></i>
                                            </button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea name="mobilityConstraints" id="mobilityConstraints" class="form-control" rows="3"
                                                placeholder="Ex. My physical injury serves as a hindrance for me to traveling to different places" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ $cdp->getPropertyByKey('mobilityConstraints')->value ?? '' }}</textarea>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-default btn-sm text-white edit-action-btn mt-2 brand-color-bg"
                                                data-editing="false">
                                                <i class="fa fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-4 row-space">
                <h6 class="fw-bold">5. List your specific development activities to address your career development focus.
                </h6>
                <p class="mt-3">
                    Consider on-the-job development activities that allow you to learn through others, workshops, as well as
                    self-study. Click on the ‘Edit’ icon to update the corresponding row of the table.
                </p>
                <div class="row">
                     <div class="col-md-6">
                        <img src="{!! url('/images/70-20-10.png') !!}"
                            alt="70-20-10 Image"
                            class="img-fluid"
                            style="cursor: pointer;"
                            data-bs-toggle="modal"
                            data-bs-target="#cdpImagePreviewModal">
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li>
                                <p class="">The 70-20-10 Learning and Development principle asserts that the
                                    effectiveness of an individual’s learning may be acquired through Workplace Learning or
                                    hands-on experience (70%), 20% comes from social Learning, and 10% through Structured
                                    Learning.</p>
                            </li>
                            <li>
                                <p>70% - Experiential learning happens through completing daily tasks, resolving issues, and
                                    regular practice. This learning is informal, typically self-directed, and enables
                                    employees
                                    to learn through on- the-job experiences.</p>
                            </li>
                            <li>
                                <p>20% - Social learning happens by interacting with and observing other people. In the
                                    workplace, this occurs through co-workers and managers. By completing tasks or projects
                                    and
                                    overcoming challenges together, your employees learn from their peers while working
                                    towards
                                    a common goal.</p>
                            </li>
                            <li>
                                <p>10% - Formal learning, the most well-known aspect of the model, is learning that’s
                                    delivered
                                    in a structured way. Used to improve employee performance through goal-orientated and
                                    Instructor-Led Training, it complements the experiential and social learning methods.
                                    It’s
                                    also great for establishing baseline knowledge for a given topic.</p>
                            </li>
                            <li>
                                <p>The 70-20-10 model focuses on learning in the context of the workplace. It aims to make
                                    good
                                    employees great by providing diverse opportunities to learn through different methods.
                                </p>
                            </li>
                            <li>
                                <p>In the absence of a training program, what are the learning interventions that you think
                                    will
                                    help you improve your chosen priority competencies?</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-4">

                <h6 class="fw-bold">Example:</h6>

                <div class="d-flex flex-row align-items-center ">
                    <div class="col-3">
                        <label for="competencyDevelopmentGoal" class="form-label fw-bold">Competency Development
                            Need/Goal:</label>
                    </div>
                    <div class="col-3">
                        <select class="form-select" id="competencyDevelopmentGoal" readonly required>
                            <option selected>Public Speaking</option>
                        </select>
                    </div>
                </div>


                <table class="table mt-3 table-striped shadow-lg bdr mt-4">
                    <thead style="background-color:#F1F3F9;">
                        <tr>
                            <th></th>
                            <th>Development Actions</th>
                            <th>Measures / Target Dates</th>
                            <th>By whom</th>
                            <th>Status</th>
                            <th>Supervisor Notes</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Experience on-the-job (70%)</td>
                            <td>Taking on modules from the training program Presenting to a group</td>
                            <td>Q2 2024</td>
                            <td>Juan Dela Cruz</td>
                            <td><span class="badge bg-success text-dark p-2">Done</span></td>
                            <td>Text here</td>
                            <td><button class="btn btn-outline-default btn-sm text-white brand-color-bg" disabled><i
                                        class="fa fa-edit" disabled></i></button></td>

                        </tr>
                        <tr>
                            <td>Exposure to others (20%)</td>
                            <td>Text here</td>
                            <td>Text here</td>
                            <td>Text here</td>
                            <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                            <td>Text here</td>
                            <td><button class="btn btn-outline-default btn-sm text-white brand-color-bg" disabled><i
                                        class="fa fa-edit"></i></button></td>

                        </tr>
                        <tr>
                            <td>Education and Formal Training (10%)</td>
                            <td>Text here</td>
                            <td>Text here</td>
                            <td>Text here</td>
                            <td><span class="badge bg-success text-dark p-2">Done</span></td>
                            <td>Text here</td>
                            <td><button class="btn btn-outline-default btn-sm text-white brand-color-bg" disabled><i
                                        class="fa fa-edit"></i></button></td>

                        </tr>

                    </tbody>
                </table>
            </div>
            @php
                $activitiesByTermAndPercent = $cdp->developmentActivities->groupBy(['term', 'percent_criteria']);
                $percentLabels = [
                    70 => 'experience',
                    20 => 'exposure',
                    10 => 'education',
                ];
            @endphp
            @foreach (['shortterm', 'mediumterm', 'longterm'] as $term)
                @for ($i = 1; $i <= 1; $i++)
                    @php
                        $specificTerm = "{$term}{$i}";
                        $devActivities = $cdp->developmentActivities->where('term', $specificTerm);
                    @endphp

                    <div class="mb-4 row-space">
                        <h6 class="fw-bold mt-5 mb-4">
                            {{ ucfirst($term === 'shortterm' ? 'short term' : ($term === 'mediumterm' ? 'medium term' : 'long term')) }}
                            ({{ $term === 'shortterm' ? '1-2 Years' : ($term === 'mediumterm' ? '3-5 Years' : '6-10 Years') }})
                        </h6>

                        <div class="d-flex flex-row align-items-center">
                            <div class="col-3">
                                <label for="{{ $term }}{{ $i }}CompetencyDevelopmentGoal"
                                    class="form-label fw-bold">Competency Development Need/Goal:</label>
                            </div>
                            <div class="col-3">
                                <select class="form-select"
                                    id="{{ $term }}{{ $i }}CompetencyDevelopmentGoal"
                                    name="developmentActivities[{{ $term }}][{{ $i }}][competency_id]"
                                    {!! fieldAccess($isEmployeeMode) !!}
                                    required>
                                    <option value="">Select Competency</option>
                                    @foreach ($competencies as $competency)
                                        @php
                                            $isSelected = false;
                                            foreach ($devActivities as $activity) {
                                                if ($activity->competency_id == $competency->id) {
                                                    $isSelected = true;
                                                    break;
                                                }
                                            }
                                        @endphp
                                        <option value="{{ $competency->id }}" {{ $isSelected ? 'selected' : '' }}>
                                            {{ $competency->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <table class="table mt-3 table-striped shadow-lg bdr">
                            <thead style="background-color:#F1F3F9;">
                                <tr>
                                    <th></th>
                                    <th>Development Actions</th>
                                    <th>Measures / Target Dates</th>
                                    <th>By whom</th>
                                    <th>Status</th>
                                    <th>Supervisor Notes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($percentLabels as $percent => $activityTypeLabel)
                                    @php
                                        $label =
                                            $activityTypeLabel === 'experience'
                                                ? 'Experience on-the-job (70%)'
                                                : ($activityTypeLabel === 'exposure'
                                                    ? 'Exposure to others (20%)'
                                                    : 'Education and Formal Training (10%)');
                                        $activities =
                                            optional($activitiesByTermAndPercent->get($specificTerm))->get($percent) ??
                                            collect();

                                        // Accumulate text
                                        $actionText = collect($activities)->pluck('action')->join("\n");
                                        $measureText = collect($activities)->pluck('target_date')->join("\n");
                                        $byWhomText = collect($activities)->pluck('by_whom')->join("\n");
                                        $statusText = collect($activities)->pluck('status')->join("\n");
                                        $supervisorNotesText = collect($activities)
                                            ->pluck('supervisor_notes')
                                            ->join("\n");
                                    @endphp

                                    <tr>
                                        <td>{{ $label }}</td>
                                        <td>
                                            <textarea name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityTypeLabel }}][action]"
                                                id="{{ $term }}{{ $i }}{{ $activityTypeLabel }}DevelopmentActions" class="form-control"
                                                rows="3" placeholder="Development Actions" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ trim($actionText) }}</textarea>
                                        </td>
                                        <td>
                                            <textarea
                                                name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityTypeLabel }}][target_date]"
                                                id="{{ $term }}{{ $i }}{{ $activityTypeLabel }}Measures" class="form-control"
                                                rows="3" placeholder="Measures / Target Dates" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ trim($measureText) }}</textarea>
                                        </td>
                                        <td>
                                            <textarea name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityTypeLabel }}][by_whom]"
                                                id="{{ $term }}{{ $i }}{{ $activityTypeLabel }}by_whom" class="form-control" rows="3"
                                                placeholder="By Whom" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ trim($byWhomText) }}</textarea>
                                        </td>
                                        <td>
                                            <select
                                                name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityTypeLabel }}][status]"
                                                class="form-select" aria-required="true"
                                                style="width: 100px;font-size: 0.8rem;padding: 5px;">
                                                <option value="on_going"
                                                    {{ $statusText == 'on_going' ? 'selected' : '' }}>Ongoing</option>
                                                <option value="done" {{ $statusText == 'done' ? 'selected' : '' }}>
                                                    Done</option>
                                            </select>
                                        </td>

                                        <td>
                                            @if (auth()->user()->hasRole('supervisor') && $session_type == 'employee_assessment')
                                                <textarea
                                                    name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityTypeLabel }}][supervisor_notes]"
                                                    id="{{ $term }}{{ $i }}{{ $activityTypeLabel }}SupervisorNotes" class="form-control"
                                                    rows="3" placeholder="Supervisor Notes" readonly>{{ trim($supervisorNotesText) }}</textarea>
                                            @else
                                                <textarea class="form-control" rows="3" placeholder="Supervisor Notes" disabled>{{ trim($supervisorNotesText) }}</textarea>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-default btn-sm text-white edit-action-btn brand-color-bg"
                                                data-editing="false"><i class="fa fa-edit"></i></button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>


                        </table>
                    </div>
                @endfor
            @endforeach



            <div class="mb-4">
                <p class="text-center ">You've reached the end of the Career Development Plan.</p>
                <p class="text-center "> It is important to note that once you click on the <strong>'Submit &
                        Continue'</strong> button, both Employee (or owner of
                    this CDP) and Supervisor will be able to view all the contents of and changes made on this CDP.</p>
            </div>

            <div class="d-flex justify-content-between">

                <a href="{{ route('competency_assessment.pdap_extended', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                    class="btn btn-md mt-2 btn-outline-dark">Back to PDAP</a>
                <div>
                    <button type="submit" name="action" value="save" id="saveButton"
                        class="btn btn-md mt-2 text-light brand-color-bg">Save</button>
                    <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                        id="submitAndContinueLink"
                        class="btn btn-md mt-2 text-light brand-color-bg">Submit & Continue</a>
                </div>

            </div>
        </form>

           <!-- Fullscreen Image Preview Modal -->
<div class="modal fade" id="cdpImagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-transparent border-0 position-relative" style="pointer-events: auto;">

            <!-- Close Button -->
            <div class="position-absolute top-0 end-0 m-3" style="z-index: 1056;">
                <button type="button"
                        class="btn btn-light btn-sm"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        style="border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    &times;
                </button>
            </div>

            <!-- Modal Image -->
            <div class="modal-body p-0 m-0 d-flex justify-content-center align-items-center"
                 style="background: transparent;">
                <img src="{!! url('/images/70-20-10.png') !!}"
                     alt="70-20-10 Full Preview"
                     style="width: 1400px; height: auto; object-fit: contain;">
            </div>

    </div>
    @include('auth.partials.privacy_policy')

@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        const isEmployeeMode = {{ $isEmployeeMode ? 'true' : 'false' }};
        const isSupervisorMode = {{ $isSupervisorMode ? 'true' : 'false' }};

        // 🔁 Toggle edit button behavior with role protection
        $('.edit-action-btn').click(function () {
            const $icon = $(this).find('i');
            const $row = $(this).closest('tr');
            const $textareas = $row.find('textarea');
            const $selects = $row.find('select');
            const isSupervisorNoteRow = $textareas.filter('[name*="supervisor_notes"]').length > 0;

            const canEditRow = (isSupervisorMode && isSupervisorNoteRow) || (isEmployeeMode && !isSupervisorNoteRow);

            // 🚫 Prevent toggle if user doesn't have permission for this row
            if (!canEditRow) return;

            const isEditing = $(this).data('editing');
            $(this).data('editing', !isEditing);
            $icon.toggleClass('fa-edit fa-times');

            $textareas.each(function () {
                const isSupervisorNote = this.name.includes('supervisor_notes');
                if (isSupervisorNote && isSupervisorMode) {
                    this.readOnly = isEditing;
                } else if (!isSupervisorNote && isEmployeeMode) {
                    this.readOnly = isEditing;
                }
            });

            $selects.each(function () {
                if (isEmployeeMode) {
                    this.disabled = isEditing;
                    this.style.pointerEvents = isEditing ? 'none' : '';
                    this.style.backgroundColor = isEditing ? '#e9ecef' : '';
                }
            });
        });
    });

    // ✅ Save button validation
    document.getElementById('saveButton').addEventListener('click', function (event) {
        var form = document.getElementById('cdpForm');
        var requiredFields = form.querySelectorAll('[required]');
        var allFilled = true;

        requiredFields.forEach(function (field) {
            if (!field.value.trim()) {
                allFilled = false;
                field.classList.add('is-invalid');
                if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                    var invalidFeedback = document.createElement('div');
                    invalidFeedback.classList.add('invalid-feedback');
                    invalidFeedback.textContent = 'This field is required';
                    field.parentNode.insertBefore(invalidFeedback, field.nextSibling);
                }
            } else {
                field.classList.remove('is-invalid');
                if (field.nextElementSibling && field.nextElementSibling.classList.contains('invalid-feedback')) {
                    field.nextElementSibling.remove();
                }
            }
        });

        if (allFilled) {
            form.submit();
        } else {
            event.preventDefault();
            document.querySelector('.is-invalid').scrollIntoView({ behavior: 'smooth' });
        }
    });

    // ✅ Submit & Continue validation
    document.getElementById('submitAndContinueLink').addEventListener('click', function (event) {
        var form = document.getElementById('cdpForm');
        var requiredFields = form.querySelectorAll('[required]');
        var allFilled = true;

        requiredFields.forEach(function (field) {
            if (!field.value.trim()) {
                allFilled = false;
                field.classList.add('is-invalid');
                if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                    var invalidFeedback = document.createElement('div');
                    invalidFeedback.classList.add('invalid-feedback');
                    invalidFeedback.textContent = 'This field is required';
                    field.parentNode.insertBefore(invalidFeedback, field.nextSibling);
                }
            } else {
                field.classList.remove('is-invalid');
                if (field.nextElementSibling && field.nextElementSibling.classList.contains('invalid-feedback')) {
                    field.nextElementSibling.remove();
                }
            }
        });

        if (!allFilled) {
            event.preventDefault();
            var firstInvalid = document.querySelector('.is-invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            alert('Please complete all required fields before continuing.');
        } else {
            form.submit();
        }
    });
</script>
@endsection
