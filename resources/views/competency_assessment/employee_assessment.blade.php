@extends('layouts.employee')

@section('content')
    <div class="container-xxl mt-2 p-5 bg-white rounded" >
        <div class="employee-assessment">
            <h1 class="mb-4 text-center">EMPLOYEE ASSESSMENT</h1>
            <p class="mb-4 text-center">Listed below are the Employees that must be assessed by you as their Supervisor. To begin your assessment, click on the three dots found in the rightmost column of the table to open the expandable menu, and click ‘Assess.’ After completing the assessment, use the same menu to access and view the Employee’s Career Development Plan.</p>
            <div class="row mb-2">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <div class="text-end">
                        <form method="GET" action="{{ route('competency_assessment.employee_assessment', ['employee' => $employee, 'session_type' => $session_type]) }}" id="searchForm">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control" name="searchEmployee" placeholder="Search..." id="searchInput">
                                <button type="button" class="btn btn-outline-secondary" id="cancelButton" style="display: none;">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
          
            </div>
            <div class="table-responsive">
                <table class="table table-striped bdr">
                    <thead style="background-color:#F1F3F9;">
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Employee Number</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            {{-- <th scope="col">Email</th> --}}
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col">Date Submitted</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($supervisedEmployees as $supervisedEmployee)
                            <tr>
                                {{-- <th scope="row">{{ $supervisedEmployee->id }}</th> --}}
                                <td>{{ $supervisedEmployee->employee_id }}</td>
                                <td>{{ $supervisedEmployee->firstname }}</td>
                                <td>{{ $supervisedEmployee->lastname }}</td>
                                {{-- <td>{{ $supervisedEmployee->email }}</td> --}}
                                <td class="text-center">
                                    @if ($supervisedEmployee->assessment_status == 'for evaluation')
                                        <span class="badge bg-orange text-dark p-2 w-100 text-uppercase text-center"
                                            style="border-radius: 10px;">For Evaluation</span>
                                    @elseif ($supervisedEmployee->assessment_status == 'continue')
                                        <span class="badge bg-warning text-dark p-2 w-100 text-uppercase text-center"
                                            style="border-radius: 10px;">Continue</span>
                                    @elseif ($supervisedEmployee->assessment_status == 'completed')
                                        <span class="badge bg-success text-dark p-2 w-100 text-uppercase text-center"
                                            style="border-radius: 10px;">Completed</span>
                                    @else
                                        <span class="badge bg-danger text-dark p-2 w-100 text-uppercase text-center"
                                            style="border-radius: 10px;">{{ $supervisedEmployee->assessment_status }}</span>
                                    @endif
                                </td>
                                <td></td>
                                <td>
                                    <div class="dropdown custom-dropdown">
                                        <button class="btn btn-light btn-sm" type="button"
                                            id="dropdownMenuButton{{ $supervisedEmployee->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu"
                                            aria-labelledby="dropdownMenuButton{{ $supervisedEmployee->id }}">
                                            @if ($supervisedEmployee->assessment_status != 'pending')
                                                <li><a class="dropdown-item"
                                                        href="{{ route('competency_assessment.about', ['employee' => $supervisedEmployee->id, 'session_type' => 'employee_assessment']) }}">Assess</a>
                                                </li>
                                            @else
                                                <li class="dropdown-item disabled">Assess (Unavailable)</li>
                                                <li><a class="dropdown-item" href="#">View Profile</a></li>

                                            @endif
                                            @if ($supervisedEmployee->assessment_status == 'completed')
                                                <li><a class="dropdown-item"
                                                        href="{{ route('competency_assessment.summary', ['employee' => $supervisedEmployee->id, 'session_type' => 'employee_assessment', 'id' => $supervisedEmployee->competencyAssessmentId]) }}">View
                                                        Summary of Rating</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('competency_assessment.cdp', ['employee' => $supervisedEmployee->id, 'session_type' => 'employee_assessment', 'id' => $supervisedEmployee->competencyAssessmentId]) }}">View Career
                                                        Development Plan</a></li>
                                            @else
                                                <li><a class="dropdown-item" href="#">View Profile</a></li>

                                                <li class="dropdown-item disabled">View Summary of Rating (Unavailable)</li>
                                                <li class="dropdown-item disabled">View Career Development Plan (Unavailable)
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No employees found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $supervisedEmployees->links() }}
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var searchInput = document.getElementById('searchInput');
        var cancelButton = document.getElementById('cancelButton');
        var currentUrl = new URL(window.location.href);
        if (currentUrl.searchParams.get('searchEmployee')) {
            cancelButton.style.display = 'block';
        }
        cancelButton.addEventListener('click', function () {
            currentUrl.searchParams.delete('searchEmployee');
            window.location.href = currentUrl.toString();
        });
    });
</script>



