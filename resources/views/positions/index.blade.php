@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Position</h2>
        <div class="lead">
            Manage your Positions here.
            <a href="{{ route('positions.create') }}" class="btn btn-primary btn-sm float-right">Add Position</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Position Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($positions as $key => $positions)
            <tr>
                <td>{{ $positions->id }}</td>
                <td>{{ $positions->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('positions.show', $positions->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('positions.edit', $positions->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['positions.destroy', $positions->id],'style'=>'display:inline']) !!}
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