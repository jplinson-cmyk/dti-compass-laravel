@extends('layouts.app-master')

@section('content')
    <div class="container">
        <h1>ABOUT COMPASS</h1>
        <div class="row">
            <div class="col-md-6">
              
                <p>
                    This competency assessment encompasses all the capabilities of an individual that are necessary to
                    perform the job effectively. All of which are important for the overall success of an organization. The
                    competencies displayed on your assessment are categorized based on your job family, competency profiles,
                    duties, and responsibilities. It is also classified based on the progression of the degree of scope,
                    context, complexity, autonomy, and responsibility of your work from Level 1 to Level 4. Where Level 1
                    shows the most basic, rudimentary, and supervised level while Level 4 shows the most complex, expert,
                    and autonomous level.
                </p>

                <h2>Competency Framework</h2>
                <p>
                    The competency framework displays <strong>mission-critical competencies clustered into three groups</strong>, these are:
                </p>
                <img src="{{ asset('images/about_compass.png') }}" class="img-fluid" alt="Compass Image">
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col">
                    The <strong>Organizational or Core Competencies</strong> cluster captures DTI’s values, mission, strategy, and unique service proposition and must be possessed by all employees regardless of position or rank.
                </div>
              </div>
            <div class="row pt-2">
                <div class="col">
                    The <strong>Technical Competencies</strong> cluster pertains to specific bodies of knowledge, skills, and attributes required to perform specific activities in an industry, function, or job.
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    The <strong>Leadership and Managerial Competencies</strong> relate to the knowledge, skills, and attributes needed to influence people and perform managerial work, this resides in those holding supervisory positions or those handling teams.
                </div>
            </div>
    
                <p>
                    The following pages set out all the organizational, functional, leadership and managerial (for Supervisors and up) competencies that DTI employees shall demonstrate when performing their roles. Each tier includes a set of observable behavioral indicators. You and your immediate supervisor are requested to answer them, to determine your competency level and training needs. 
                </p>

                <p>
                    For reference, you can view and download the complete DTI Competency Dictionary in the next page.
                </p>

                <p>
                    When you're ready to begin, click the 'Continue' button below to proceed to view the complete Competency Dictionary.
                </p>
            </div>
            <div class="form-group">
                <a href="{{ route('competency_assessment.dictionary', ['employee' => $employee]) }}
                    " class="btn btn-primary float-right">Continue</a>
            </div>
        </div>
    </div>
@endsection
