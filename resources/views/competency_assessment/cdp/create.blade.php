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
    <div class="container-fluid mt-2 p-5 bg-white rounded">
       {{-- 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
--}}

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

       <form 
            method="POST" 
            id="cdpForm" 
            class="needs-validation" 
            novalidate
            action="{{ route('competency_assessment.cdp', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}">
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
                              <textarea name="interests" id="interests" class="form-control @error('interests') is-invalid @enderror" rows="3" placeholder="Interests" {!! fieldAccess($isEmployeeMode) !!} readonly required>{{ old('interests') }}</textarea>
                                    @error('interests')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </td>
                            <td>
                                <textarea name="values" id="values" class="form-control" rows="3" placeholder="Values" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
                            </td>
                            <td>
                                <textarea name="careerGoals" id="careerGoals" class="form-control" rows="3" placeholder="Career Goals" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
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
                                <textarea name="strengths" id="strengths" class="form-control" rows="3" placeholder="Strengths" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
                            </td>
                            <td>
                                <textarea name="developmentGaps" id="developmentGaps" class="form-control" rows="3"
                                    placeholder="Development Gaps" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
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
                        <h6 class="fw-bold">3. Identify your Role Aspiration within DTI.</h6>
                        <div class="row mb-4">
                            <h6 class="fw-bold">Short Term (1-2 Years)</h6>
                            <div class="col-6">
                                <select class="form-select" name="aspirations[shortterm][position]" {!! selectAccess($isEmployeeMode) !!} required>
                                    <option value="" selected disabled>Select Position</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-select" name="aspirations[shortterm][bureauOffice]" {!! selectAccess($isEmployeeMode) !!} required>
                                    <option value="" selected disabled>Select Bureau/Office</option>
                                    @foreach ($bureauOffices as $bureauOffice)
                                        <option value="{{ $bureauOffice->id }}">{{ $bureauOffice->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-4 mt-4">
                            <h6 class="fw-bold">Medium Term (3-5 Years)</h6>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[mediumterm][position]" {!! selectAccess($isEmployeeMode) !!} required>
                                        <option value="" selected disabled>Select Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[mediumterm][bureauOffice]" {!! selectAccess($isEmployeeMode) !!} required>
                                        <option value="" selected disabled>Select Bureau/Office</option>
                                        @foreach ($bureauOffices as $bureauOffice)
                                            <option value="{{ $bureauOffice->id }}">{{ $bureauOffice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mt-3">
                            <h6 class="fw-bold">Long Term (6-10 Years)</h6>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[longterm][position]" {!! selectAccess($isEmployeeMode) !!} required>
                                        <option value="" selected disabled>Select Position</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="aspirations[longterm][bureauOffice]" {!! selectAccess($isEmployeeMode) !!} required>
                                        <option value="" selected disabled>Select Bureau/Office</option>
                                        @foreach ($bureauOffices as $bureauOffice)
                                            <option value="{{ $bureauOffice->id }}">{{ $bureauOffice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mt-3">
                            <h6 class="fw-bold">4. Provide your role aspiration in any agency/institution outside of DTI. </h6>

                            <div class="row mb-3">
                                <div class="col">
                                <textarea id="careerRoadmapFocus" name="careerRoadmapFocus" class="form-control" rows="4" placeholder="" {!! fieldAccess($isEmployeeMode) !!}  required></textarea>
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
                                                placeholder="Ex. Head Office, with little to no travel" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
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
                                                placeholder="Ex. My physical injury serves as a hindrance for me to traveling to different places" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
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
                <h6 class="fw-bold">6. List your specific development activities to address your career development focus.
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
                        <select class="form-select" id="competencyDevelopmentGoal" {!! fieldAccess($isEmployeeMode) !!} readonly required>
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
                                        class="fa fa-edit"></i></button></td>

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

            @foreach (['shortterm', 'mediumterm', 'longterm'] as $term)
                @for ($i = 1; $i <= 1; $i++)
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
                                    name="developmentActivities[{{ $term }}][{{ $i }}][competency_id]" {!! selectAccess($isEmployeeMode) !!} required>
                                    <option value="" disabled selected style="color: #6c757d;">Select Competency
                                    </option>
                                    @foreach ($competencies as $competency)
                                        <option value="{{ $competency->id }}">{{ $competency->name }}</option>
                                    @endforeach
                                </select>
                                @error("developmentActivities.$term.$i.competency_id")
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <table class="table mt-3 table-striped shadow-lg bdr">
                            <thead style="background-color:#F1F3F9;">
                                <tr>
                                    <th>Type of Activity</th>
                                    <th>Development Actions</th>
                                    <th>Measures / Target Dates</th>
                                    <th>By whom</th>
                                    <th>Status</th>
                                    <th>Supervisor Notes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (['experience' => 'Experience on-the-job (70%)', 'exposure' => 'Exposure to others (20%)', 'education' => 'Education and Formal Training (10%)'] as $activityType => $label)
                                    <tr>
                                        <td>{{ $label }}</td>
                                        <td>
                                            <textarea name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityType }}][action]"
                                                id="{{ $term }}{{ $i }}{{ $activityType }}DevelopmentActions" class="form-control"
                                                rows="3" placeholder="Development Actions" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
                                        </td>
                                        <td>
                                            <textarea name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityType }}][target_date]"
                                                id="{{ $term }}{{ $i }}{{ $activityType }}Measures" class="form-control" rows="3"
                                                placeholder="Measures / Target Dates" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
                                        </td>
                                        <td>
                                            <textarea name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityType }}][by_whom]"
                                                id="{{ $term }}{{ $i }}{{ $activityType }}by_whom" class="form-control" rows="3"
                                                placeholder="By Whom" {!! fieldAccess($isEmployeeMode) !!} readonly required></textarea>
                                        </td>
                                        <td>
                                            <select
                                                name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityType }}][status]"
                                                class="form-select" aria-required="true"
                                                {!! selectAccess($isEmployeeMode) !!}
                                                style="width: 100px;font-size: 0.8rem;padding: 5px;">
                                                <option value="on_going" selected>Ongoing</option>
                                                <option value="done">
                                                    Done</option>
                                            </select>
                                        </td>
                                        <td>
                                           @if ($isSupervisorMode)
                                                <textarea
                                                    name="developmentActivities[{{ $term }}][{{ $i }}][{{ $activityType }}][supervisor_notes]"
                                                    id="{{ $term }}{{ $i }}{{ $activityType }}SupervisorNotes"
                                                    class="form-control"
                                                    rows="3"
                                                    placeholder="Supervisor Notes"
                                                    {!! fieldAccess($isSupervisorMode) !!}></textarea>
                                            @else
                                                <textarea class="form-control" rows="3" placeholder="Supervisor Notes" disabled></textarea>
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
                <button type="submit" class="btn btn-md mt-2 text-light brand-color-bg" onclick="setFormAction('save')">
    Save
</button>

                        <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => 3]) }}"
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

        // 🔁 Edit button toggle logic
        $('.edit-action-btn').click(function () {
            var isEditing = $(this).data('editing');
            var $icon = $(this).find('i');
            var $row = $(this).closest('tr');
            var $textareas = $row.find('textarea');
            var $selects = $row.find('select');

            $(this).data('editing', !isEditing);
            $icon.toggleClass('fa-edit fa-times');

            $textareas.each(function () {
                const isSupervisorNote = this.name.includes('supervisor_notes');

                // Only employees can toggle employee fields
                if (!isSupervisorNote && isEmployeeMode) {
                    this.readOnly = isEditing;
                }

                // Only supervisors can toggle supervisor_notes
                if (isSupervisorNote && isSupervisorMode) {
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

        // ✅ Validate only on Submit & Continue (not Save)
        const form = document.getElementById('cdpForm');
        const continueLink = document.getElementById('submitAndContinueLink');

        if (form && continueLink) {
            continueLink.addEventListener('click', function (e) {
                e.preventDefault(); // stop link redirect
                if (!form.checkValidity()) {
                    alert('Please complete all required fields before continuing.');
                    form.classList.add('was-validated');

                    // Scroll to first invalid field
                    const firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.focus();
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                } else {
                    form.submit(); // submit manually if valid
                }
            });
        }
    });
</script>
@endsection
