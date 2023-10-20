@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>2024 DTI Academy</h1>
    <h2>Competency Assessment and Training Needs Analysis</h2>

    <p>
        "This competency assessment encompasses all the capabilities of an individual that are necessary to perform the job effectively. All of which are important for the overall success of an organization. The competencies displayed on your assessment are categorized based on your job family, competency profiles, duties, and responsibilities. It is also classified based on the progression of the degree of scope, context, complexity, autonomy, and responsibility of your work from Level 1 to Level 4. Where Level 1 shows the most basic, rudimentary, and supervised level while Level 4 shows the most complex, expert, and autonomous level."
    </p>

    <h2>Competency Framework</h2>
    <p>
        "The competency framework displays mission-critical competencies clustered into three groups, these are:"
    </p>
    <img src="{{ asset('images/about_compass.png') }}">
    <ul>
        <li>
            <strong>Organizational or Core Competencies:</strong> Capture DTI’s values, mission, strategy, and unique service proposition and must be possessed by all employees regardless of position or rank.
        </li>
        <li>
            <strong>Technical Competencies:</strong> Pertain to specific bodies of knowledge, skills, and attributes required to perform specific activities in an industry, function, or job.
        </li>
        <li>
            <strong>Leadership and Managerial Competencies:</strong> Relate to the knowledge, skills, and attributes needed to influence people and perform managerial work, this resides in those holding supervisory positions or those handling teams.
        </li>
    </ul>

    <p>
        "The following pages set out all the organizational, functional, leadership, and managerial (for Supervisors and up) competencies that DTI employees shall demonstrate when performing their roles. Each tier includes a set of observable behavioral indicators. You and your immediate supervisor are requested to answer them, to determine your competency level and training needs."
    </p>

    <p>
        "For reference, you can open the complete DTI Competency Dictionary by clicking here (<a href="#" target="_blank">opens in a new tab</a>)."
    </p>

    <p>
        "When you're ready to begin, click the 'Continue' button below to proceed to your Profile."
    </p>
   
    <!-- Continue Button -->
    <div class="form-group">
        <a href="#" class="btn btn-primary">CONTINUE</a>
    </div>
    <br>
</div>
@endsection
