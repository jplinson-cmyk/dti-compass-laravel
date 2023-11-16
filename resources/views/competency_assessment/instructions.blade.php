@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1 class="text-center">INSTRUCTIONS</h1>
    <h2>MY SELF-ASSESSMENT CHECKLIST</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                {{-- <th>Competency Cluster</th> --}}
                <th>Competency Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competencyDetails as $details)
                <tr>
                    {{-- <td>{{ $details['competency']->competency_category->name }}</td> --}}
                    <td>{{ $details['competency']->name }}</td>
                    <td><p href="#" class="btn btn-warning"><strong>CONTINUE</strong></p></td>
                    <td><a href="#" class="btn btn-primary"><i class="fa fa-pen"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('competency_assessment.rating_scale', ['employee' => $employee]) }}" class="btn btn-default float-left mt-2">Back</a>
        <a href="{{ route('competency_assessment.core_competency', ['employee' => $employee]) }}" class="btn btn-primary float-right mt-2">Continue</a>
    </div>
</div>
@endsection
