@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Competency Categories</h2>
        <div class="lead">
            Manage your Competency Category here.
            <a href="{{ route('competency_categories.create') }}" class="btn btn-primary btn-sm float-right">Add Competency Category</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Category Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($competency_categories as $key => $competency_categories)
            <tr>
                <td>{{ $competency_categories->id }}</td>
                <td>{{ $competency_categories->category_name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('competency_categories.show', $competency_categories->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('competency_categories.edit', $competency_categories->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['competency_categories.destroy', $competency_categories->id],'style'=>'display:inline']) !!}
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