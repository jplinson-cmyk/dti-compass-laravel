@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Functional Group</h2>
        <div class="lead">
            Manage your Function Group here.
            <a href="{{ route('functionalgroups.create') }}" class="btn btn-primary btn-sm float-right">Add Functional Group</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Functional Group Name</th>
             <th>Short Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($functionalgroups as $key => $functionalgroups)
            <tr>
                <td>{{ $functionalgroups->id }}</td>
                <td>{{ $functionalgroups->name }}</td>
                <td>{{ $functionalgroups->short_name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('functionalgroups.show', $functionalgroups->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('functionalgroups.edit', $functionalgroups->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['functionalgroups.destroy', $functionalgroups->id],'style'=>'display:inline']) !!}
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