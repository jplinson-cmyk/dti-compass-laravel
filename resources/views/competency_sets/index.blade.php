@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Competency Sets</h2>
        <div class="lead">
            Manage your competency sets here.
            <a href="{{ route('competency_sets.create') }}" class="btn btn-primary btn-sm float-right">Add Competency Sets</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Functional Group Name</th>
             <th>Bureau Office</th>
             <th>Division</th>
             <th>Position</th>
             <th>Competency</th>
             <th>Standard</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($competency_sets as $key => $competency_sets)
            <tr>
                <td>{{ $competency_sets->id }}</td>
                <td>{{ $competency_sets->functionalGroup->name ?? 'N/A'}}</td>
                <td>{{ $competency_sets->bureauOffice->name ?? 'N/A'}}</td>
                <td>{{ $competency_sets->division->name ?? 'N/A'}}</td>
                <td>{{ $competency_sets->position->name ?? 'N/A'}}</td>
                <td>{{ $competency_sets->competency->name ?? 'N/A'}}</td>
                <td>{{ $competency_sets->standard ?? 'N/A'}}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('competency_sets.show', $competency_sets->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('competency_sets.edit', $competency_sets->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['competency_sets.destroy', $competency_sets->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        {{-- <div class="d-flex">
            {!! $competencies_categories->links() !!}
        </div> --}}

    </div>
@endsection