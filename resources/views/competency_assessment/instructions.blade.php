@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>INSTRUCTIONS</h1>
    <p>
        Provided in the table below are the competencies per category that are identified based on your position and functions. Please rate per competency and the corresponding behaviors according to the frequency of demonstration and level of supervision using the rating scale presented in the previous page.
    </p>
    <p>
        To begin with the assessment, you can click on the pencil icon under the ‘Action’ column, or click on the ‘Continue’ button to proceed in the order that they appear in the table below. Should you need to pause, you can simply log back in, return to this page for your checklist, check the status in the table below, and click on the pencil icon to resume answering the competency forms that you have not yet completed.
    </p>

    <h2>MY SELF-ASSESSMENT CHECKLIST</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Competency Cluster</th>
                <th>Competency Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>Core Competency</td>
                    <td>Integrated Industry and Global Outlook</td>
                    <td><p href="#" class="btn btn-warning"><strong>CONTINUE</strong></p></td>
                    <td><button class="btn btn-primary"><i class="fa fa-pen"></i></button></td>
                </tr>
                <tr>
                    <td>Technical Competency</td>
                    <td>Accounting</td>
                    <td><p href="#" class="btn btn-success"><strong>COMPLETED</strong></p></td>
                    <td><button class="btn btn-primary"><i class="fa fa-pen"></i></button></td>

                </tr>
               
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('competency_assessment.rating_scale') }}"
        class="btn btn-default float-left mt-2">Back</a>
        <a href="{{ route('competency_assessment.core_competency') }}"
        class="btn btn-primary float-right mt-2">Continue</a>
    </div>
</div>
@endsection
