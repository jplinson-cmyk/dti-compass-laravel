@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Competencies</h2>
        <div class="lead">
            Manage your competencies here.
            <a href="{{ route('competencies.create') }}" class="btn btn-primary btn-sm float-right">Add Competency</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Category</th>
             <th>Name</th>
             <th>Description</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($competencies as $key => $competencies)
            <tr>
                <td>{{ $competencies->id }}</td>
                <td>{{ $competencies->competencyCategory->category_name }}</td>
                <td>{{ $competencies->name }}</td>
                <td>{{ $competencies->description }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('competencies.show', $competencies->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('competencies.edit', $competencies->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['competencies.destroy', $competencies->id],'style'=>'display:inline']) !!}
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