@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Divisions</h1>

        <div class="lead">
            <a href="{{ route('divisions.create') }}" class="btn btn-sm float-end text-white mb-4"
                style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Division</a>
        </div>
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <tr>
                <th width="1%">No</th>
                <th>Division Name</th>
                <th>Short Name</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($divisions as $key => $division)
                <tr>
                    <td>{{ $division->id }}</td>
                    <td>{{ $division->name }}</td>
                    <td>{{ $division->short_name }}</td>
                    <td>
                        <div class="btn-group dropstart">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{ route('divisions.show', $division->id) }}">Show</a>


                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('divisions.edit', $division->id) }}">Edit</a>
                                </li>
                                <li>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['divisions.destroy', $division->id],
                                        'style' => 'display:inline',
                                    ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="d-flex mt-4 justify-content-center">
            {!! $divisions->links() !!}
        </div>

    </div>
@endsection
