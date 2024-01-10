@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-light rounded">
    <h1 class="text-center mb-4">CAREER DEVELOPMENT PLAN</h1>
        <p class="text-center mb-4">
            The Career Development Plan is a tool to assist you to identify and develop your competencies toward achieving your career goals.
        </p>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card bg-light bg-gradient">
                    <div class="card-body">
                        <h5 class="card-title">Employee Name: {{ $employee->firstname }} {{ $employee->lastname }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <h5>1. Define your personal interests, values, and career goals for your future career goals.</h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Interests</th>
                        <th scope="col">Values</th>
                        <th scope="col">Career Goals</th>
                        <th scope="col">Edit</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>

        </div>

        <div class="mb-4">
            <h5>2. List your key competency strengths and key development gaps.</h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Interests</th>
                        <th scope="col">Values</th>
                        <th scope="col">Career Goals</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <h3 class="text-center">PLANNING FOR DEVELOPMENT</h3>
        </div>
        <div class="mb-3">
            <h5>3. Define your key Career Roadmap focus.</h5>
            <p>Identify and prioritize the key Career Roadmap Focus linked to your Role Aspiration. Consider both competencies which are strengths and those that are key development gaps based on your Success Profile Assessment, SPMS or other sources of information. Consider also the experiences you need to have.
            </p>
            <table class="table table-bordered table-hover responsive">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col">
                            <h5>4. Identify your Role Aspiration.</h5>
                        </div>
                        <div class="col">
                            <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5>Short Term (1-2 Years)</h5>
                        <select class="form-select">
                            <option selected>Select Position</option>
                            <!-- Add position options here -->
                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>
                            <!-- Add bureau/office options here -->
                        </select>
                    </div>
            
                    <div class="mb-3">
                        <h5>Medium Term (3-5 Years)</h5>
                        <!-- Add dropdowns for position, bureau/office -->
                        <select class="form-select">
                            <option selected>Select Position</option>
                            <!-- Add position options here -->
                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>
                            <!-- Add bureau/office options here -->
                        </select>
                    </div>
            
                    <div class="mb-3">
                        <h5>Long Term (6-10 Years)</h5>
                        <!-- Add dropdowns for position, bureau/office -->
                        <select class="form-select">
                            <option selected>Select Position</option>
                            <!-- Add position options here -->
                        </select>
                        <select class="form-select mt-2">
                            <option selected>Select Bureau/Office</option>
                            <!-- Add bureau/office options here -->
                        </select>
                    </div>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <div class="mb-3">
                        <h5>5. Provide your mobility preferences and constraints to be considered for any future career opportunities</h5>
                        <label for="mobilityPreferences" class="form-label">Mobility Preferences</label>
                        <table class="table table-bordered table-hover responsive">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <label for="mobilityConstraints" class="form-label mt-2">Mobility Constraints</label>
                        <table class="table table-bordered table-hover responsive">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><textarea class="form-control" rows="3"></textarea></td>
                                    <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
        </div>

        <div class="mb-3">
            <h5>6. List your specific development activities to address your career development focus.</h5>
            <p>
                <!-- Add description for 70-20-10 Learning and Development principle -->
                <!-- Include any relevant text or instructions -->
            </p>
        </div>

        <div class="mb-3">
            
            <h5>Example:</h5>
            <h5>Short Term (1-2 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal" disabled>
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td>Taking on modules from the training program  Presenting to a group</td>
                        <td>Q2 2024</td>
                        <td>Juan Dela Cruz</td>
                        <td>Done</td>
                        <td>Text here</td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                        <td>Text here</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Short Term (1-2 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>

                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                 


                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Short Term (1-2 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Medium Term (3-5 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Medium Term (3-5 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Long Term (6-10 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            
            <h5>Long Term (6-10 Years)</h5>

            <label for="competencyDevelopmentGoal" class="form-label">Competency Development Need/Goal:</label>
            <select class="form-select" id="competencyDevelopmentGoal">
                <option selected>Public Speaking</option>
                <!-- Add options here -->
            </select>
            <!-- Example table for development activities -->
            <table class="table mt-3 table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Approach</th>
                        <th>Development Actions</th>
                        <th>Measures / Target Dates</th>
                        <th>By whom</th>
                        <th>Status</th>
                        <th>Supervisor Notes</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Experience on-the-job (70%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Exposure to others (20%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>
                    <tr>
                        <td>Education and Formal Training (10%)</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td>On going</td>
                        <td><textarea class="form-control" rows="3"></textarea></td>
                        <td><button class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <p class="text-center">You've reached the end of the Career Development Plan. 
                It is important to note that once you click on the 'Submit & Continue' button, both Employee (or owner of this CDP) and Supervisor will be able to view all the contents of and changes made on this CDP.</p>    
        </div>

        <div class="d-flex justify-content-between">
        
            <a href="{{ route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-outline-secondary mt-2">Back to Summary of Rating</a>
            <div>
                <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-outline-primary mt-2">Save</a>
                <a href="{{ route('competency_assessment.closing', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id]) }}" class="btn btn-outline-primary mt-2">Submit and Continue</a>    
            </div>
    
        </div>
    </div>
@endsection
