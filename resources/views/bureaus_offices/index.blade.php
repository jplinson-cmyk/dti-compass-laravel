@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Bureau Offices</h2>
        <div class="lead">
            Manage your Bureau Offices here.
            <a href="{{ route('bureaus_offices.create') }}" class="btn btn-primary btn-sm float-right">Add Functional Group</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Bureau Offices</th>
             <th>Short Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($bureaus_offices as $key => $bureaus_offices)
            <tr>
                <td>{{ $bureaus_offices->id }}</td>
                <td>{{ $bureaus_offices->name }}</td>
                <td>{{ $bureaus_offices->short_name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('bureaus_offices.show', $bureaus_offices->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('bureaus_offices.edit', $bureaus_offices->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['bureaus_offices.destroy', $bureaus_offices->id],'style'=>'display:inline']) !!}
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