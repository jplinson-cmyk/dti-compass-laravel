@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Divisions</h2>
        <div class="lead">
            Manage your Divisions here.
            <a href="{{ route('divisions.create') }}" class="btn btn-primary btn-sm float-right">Add Division</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Division Name</th>
             <th>Short Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($divisions as $key => $divisions)
            <tr>
                <td>{{ $divisions->id }}</td>
                <td>{{ $divisions->name }}</td>
                <td>{{ $divisions->short_name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('divisions.show', $divisions->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('divisions.edit', $divisions->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['divisions.destroy', $divisions->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        {{-- <div class="d-flex">
            {!! $competency_categories->links() !!}
        </div> --}}

    </div>
@endsection