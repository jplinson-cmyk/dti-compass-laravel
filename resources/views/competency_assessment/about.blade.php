@extends('layouts.compass')

@section('compass-content')
    <div class="container-fluid mt-2 p-5 bg-light rounded">
        <h1 class="mb-4">ABOUT COMPASS</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <p>
                    This competency assessment encompasses all the capabilities of an individual that are necessary to
                    perform the job effectively. All of which are important for the overall success of an organization. The
                    competencies displayed on your assessment are categorized based on your job family, competency profiles,
                    duties, and responsibilities. It is also classified based on the progression of the degree of scope,
                    context, complexity, autonomy, and responsibility of your work from Level 1 to Level 4. Where Level 1
                    shows the most basic, rudimentary, and supervised level while Level 4 shows the most complex, expert,
                    and autonomous level.
                </p>
                <p>
                    The competency framework displays
                    <span class="fw-bold">mission-critical competencies clustered into three groups</span>
                    , these are:
                </p>
                <img src="{{ asset('images/about_compass.png') }}" class="img-fluid" alt="Compass Image">
            </div>
            <div class="col-md-6">
                <p>
                    The <strong>Organizational or Core Competencies</strong> cluster captures DTI’s values, mission,
                    strategy, and unique service proposition and must be possessed by all employees regardless of position
                    or rank.
                </p>
                <p>
                    The <strong>Technical Competencies</strong> cluster pertains to specific bodies of knowledge, skills,
                    and attributes required to perform specific activities in an industry, function, or job.
                </p>
                <p>
                    The <strong>Leadership and Managerial Competencies</strong> relate to the knowledge, skills, and
                    attributes needed to influence people and perform managerial work, this resides in those holding
                    supervisory positions or those handling teams.
                </p>
                <p>
                    The following pages set out all the organizational, functional, leadership and managerial (for
                    Supervisors and up) competencies that DTI employees shall demonstrate when performing their roles. Each
                    tier includes a set of observable behavioral indicators. You and your immediate supervisor are requested
                    to answer them, to determine your competency level and training needs.
                </p>
                <p>
                    For reference, you can view and download the complete DTI Competency Dictionary in the next page.
                </p>
                <p>
                    When you're ready to begin, click the 'Continue' button below to proceed to view the complete Competency
                    Dictionary.
                </p>
                <div class="row">
                    <div class="col mt-8 mb-4 text-end">
                        <form action="{{ route('competency_assessment.save.about', ['employee' => $employee, 'session_type' => $session_type]) }}"
                            method="post">
                            @csrf
                            @if ($competencyAssessmentExist)
                                <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => $session_type]) }}"
                                    class="btn btn-lg mt-2 text-light" style="background-color:#1E4387;">Next</a>
                            @else
                                <button type="submit" class="btn btn-lg mt-2 text-light" style="background-color:#1E4387;">Start Assessment</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
