@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1 class="text-center">INSTRUCTIONS</h1>
    <p>Provided in the table below are the competencies per category that are identified based on your position and functions. Please rate per competency and the corresponding behaviors according to the frequency of demonstration and level of supervision using the rating scale presented in the previous page.</p>
    <p>To begin with the assessment, you can click on the pencil icon under the ‘Action’ column, or click on the ‘Continue’ button to proceed in the order that they appear in the table below. Should you need to pause, you can simply log back in, return to this page for your checklist, check the status in the table below, and click on the pencil icon to resume answering the competency forms that you have not yet completed.</p>
    <h2 class="text-center">MY SELF-ASSESSMENT CHECKLIST</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cluster</th>
                <th>Competency Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competencyDetails as $id => $details)
                <tr>
                    <td>{{ $details['competency']->competencyCategory->category_name }}</td>
                    <td>{{ $details['name'] }}</td>
                    <td>0 / {{ count($details['behavioral_indicators']) }}</td>
                    <td>
                        <a href="#" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <a href="{{ route('competency_assessment.employee_profile', ['employee' => $employee]) }}" class="btn btn-default float-left mt-2">Back</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <form action="{{ route('competency_assessment.save.instructions', ['employee' => $employee]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary float-right mt-2">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
