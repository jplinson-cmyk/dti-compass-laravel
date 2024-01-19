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
                                class="text-uppercase">{{ $employee->lastname }}, {{ $employee->firstname }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold">1. Define your personal interests, values, and career goals for your future career goals.
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
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="mb-4">
            <h6 class="fw-bold">2. List your key competency strengths and key development gaps.</h6>
            <table class="table table-bordered table-hover shadow-lg bdr">
                <thead style="background-color:#F1F3F9;">
                    <tr>
                        <th scope="col">Strenghts<button type="button" class="btn" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Consider results from assessment tools. Development Needs Assessment, Individual Dashboard, Performance discussions, etc.">
                                <i class="fa fa-question-circle"></i>
                            </button></th>
                        <th scope="col">Development Gaps<button type="button" class="btn" data-bs-toggle="tooltip"
                                data-bs-placement="top"
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
                            <textarea class="form-control" rows="3" placeholder="Ex. Adaptability"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Ex. Managing events"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mb-4">
            <h1 class="text-center">PLANNING FOR DEVELOPMENT</h1>
        </div>
        <div class="mb-4">
            <h6 class="fw-bold">3. Define your key Career Roadmap focus.</h6>
            <p>Identify and prioritize the key Career Roadmap Focus linked to your Role Aspiration. Consider both
                competencies which are strengths and those that are key development gaps based on your Success Profile
                Assessment, SPMS or other sources of information. Consider also the experiences you need to have.
            </p>
            <table class="table table-bordered table-hover shadow-lg bdr">
                <thead style="background-color:#F1F3F9;">
                    <tr>
                        <th scope="col"></th>
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
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col col-sm-12 col-md-6">
                    <h6 class="fw-bold">4. Identify your Role Aspiration.<span><button class="btn btn-default btn-sm"><i
                                    class="fa fa-edit"></i></button></span></h6>
                    <div class="mb-4">
                        <h6 class="fw-bold">Short Term (1-2 Years)</h6>
                        <select class="form-select">
                            <option selected>Select Position</option>

                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Medium Term (3-5 Years)</h6>

                        <select class="form-select">
                            <option selected>Select Position</option>

                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold">Long Term (6-10 Years)</h6>

                        <select class="form-select">
                            <option selected>Select Position</option>

                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>

                        </select>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <div class="mb-4">
                        <h6 class="fw-bold">5. Provide your mobility preferences and constraints to be considered for any
                            future career opportunities</h6>
                        <label for="mobilityPreferences" class="form-label">Mobility Preferences</label>
                        <table class="table table-bordered table-hover shadow-lg bdr">
                            <thead style="background-color:#F1F3F9;">
                                <tr>
                                    <th scope="col"></th>
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
                                        <textarea class="form-control" rows="3" placeholder="Ex. Head Office, with little to no travel"></textarea>
                                    </td>
                                    <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <label for="mobilityConstraints" class="form-label mt-2">Mobility Constraints</label>
                        <table class="table table-bordered table-hover shadow-lg bdr">
                            <thead style="background-color:#F1F3F9;">
                                <tr>
                                    <th scope="col"></th>
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
                                        <textarea class="form-control" rows="3"
                                            placeholder="Ex. My physical injury serves as a hindrance for me to traveling to different places"></textarea>
                                    </td>
                                    <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="mb-4">
            <h6 class="fw-bold">6. List your specific development activities to address your career development focus.</h6>
            <p class="mt-3">
                Consider on-the-job development activities that allow you to learn through others, workshops, as well as
                self-study. Click on the ‘Edit’ icon to update the corresponding row of the table.
            </p>
            <div class="row">
                <div class="col-md-6">
                    <img src="{!! url('/images/70-20-10.png') !!}" alt="" class="img-fluid">
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
                                regular practice. This learning is informal, typically self-directed, and enables employees
                                to learn through on- the-job experiences.</p>
                        </li>
                        <li>
                            <p>20% - Social learning happens by interacting with and observing other people. In the
                                workplace, this occurs through co-workers and managers. By completing tasks or projects and
                                overcoming challenges together, your employees learn from their peers while working towards
                                a common goal.</p>
                        </li>
                        <li>
                            <p>10% - Formal learning, the most well-known aspect of the model, is learning that’s delivered
                                in a structured way. Used to improve employee performance through goal-orientated and
                                Instructor-Led Training, it complements the experiential and social learning methods. It’s
                                also great for establishing baseline knowledge for a given topic.</p>
                        </li>
                        <li>
                            <p>The 70-20-10 model focuses on learning in the context of the workplace. It aims to make good
                                employees great by providing diverse opportunities to learn through different methods.</p>
                        </li>
                        <li>
                            <p>In the absence of a training program, what are the learning interventions that you think will
                                help you improve your chosen priority competencies?</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Example:</h6>
            <h6 class="fw-bold">Short Term (1-2 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal" disabled>
                <option selected>Public Speaking</option>

            </select>
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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>Taking on modules from the training program Presenting to a group</td>
                        <td>Q2 2024</td>
                        <td>Juan Dela Cruz</td>
                        <td><span class="badge bg-success text-dark p-2">Done</span></td>
                        <td>Text here</td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>Text here</td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td><span class="badge bg-success text-dark p-2">Done</span></td>
                        <td>Text here</td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Short Term (1-2 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>



                </tbody>
            </table>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Short Term (1-2 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Medium Term (3-5 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Medium Term (3-5 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-4">

            <h6 class="fw-bold">Long Term (6-10 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-5">

            <h6 class="fw-bold">Long Term (6-10 Years)</h6>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Select</option>

            </select>

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
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><span class="badge bg-orange text-dark p-2">On Going</span></td>
                        <td>
                            <textarea class="form-control" rows="3" placeholder="Text"></textarea>
                        </td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <p class="text-center fw-bold">You've reached the end of the Career Development Plan.</p>
            <p class="text-center fw-bold"> It is important to note that once you click on the 'Submit & Continue' button,
                both Employee (or owner of
                this CDP) and Supervisor will be able to view all the contents of and changes made on this CDP.</p>
        </div>

        <div class="d-flex justify-content-between">

            <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                class="btn btn-md mt-2 btn-outline-dark">Back to Summary of Rating</a>
            <div>
                <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                    class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Save</a>
                <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}"
                    class="btn btn-md mt-2 text-light" style="background-color:#1E4387;">Submit and Continue</a>
            </div>

        </div>
    </div>
@endsection
