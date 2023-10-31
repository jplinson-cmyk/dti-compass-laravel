@extends('layouts.app-master')

@section('content')
    <div class="container">
        <h2 class="text-center">COMPETENCY ASSESSMENT</h2>
        <p>As we strive to continuously provide programs that will cater to the specific needs of the DTI employees, please allow us to conduct a competency assessment to evaluate your current competency levels and determine your training needs in preparation for the 2024 competency-based training programs.  The result will also be used in developing a 3-year DTI Academy Training Plan which will have a series of recommended training courses for employees to attend to per competency, depending on the overall result of this evaluation.</p>
        <p>  Using the rating scale below, please select the appropriate rating for each behavioral indicator that you are going to assess based on how you see yourself. Once you are done reading the guidelines below, click "Continue" to proceed to the next page of this evaluation.</p>
        <h4 class="text-center">RATING SCALE</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>RATING</th>
                    <th></th>
                    <th>INTERPRETATION</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>4</td>
                        <td>ALWAYS</td>
                        <td>The behavior is demonstrated ALL THE TIME in performing one's job, even if the situation does not call for it; behavior is considered an epitome that is worth emulating, and may already coach or mentor others for this particular behavior</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>FREQUENTLY</td>
                        <td>The behavior is demonstrated MOST OF THE TIME in performing the job; expect to exhibit the behavior during expected situations at work; could demonstrate behavior independently, without much supervision.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SOMETIMES</td>
                        <td>The behavior is demonstrated EVERY ONCE IN A WHILE/OCCASIONALLY in performing the job; may or may not exhibit the behavior during expected situations at work, and relies on supervision or guidance from time to time.</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>RARELY</td>
                        <td>The behavior is SELDOM demonstrated; cannot expect to exhibit the behavior when a situation calls for it; relies heavily on supervision or guidance</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>NEVER</td>
                        <td>The behavior is NOT being demonstrated in performing the job; cannot exhibit the behavior when the situation at work calls for it.</td>
                    </tr>
            </tbody>
        </table>


        <div class="form-group">
            <a href="{{ route('competency_assessment.employee_profile') }}"
            class="btn btn-default float-left mt-2">Back</a>
            <a href="{{ route('competency_assessment.instructions') }}"
                class="btn btn-primary float-right mt-2">Continue</a>
        </div>
    </div>
@endsection
