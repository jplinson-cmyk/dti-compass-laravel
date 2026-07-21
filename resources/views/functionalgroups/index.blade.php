@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Functional Groups</h1>
        <div class="lead">
            <a href="{{ route('functionalgroups.create') }}" class="btn btn-sm float-end text-white mb-4"
                style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Functional Group</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <tr>
             <th width="1%">No</th>
             <th>Functional Group Name</th>
             <th>Short Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($functionalgroups as $key => $functionalgroup)
            <tr>
                <td>{{ $functionalgroup->id }}</td>
                <td>{{ $functionalgroup->name }}</td>
                <td>{{ $functionalgroup->short_name }}</td>
                <td>
                    <div class="btn-group dropstart">
                        <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="{{ route('functionalgroups.show', $functionalgroup->id) }}">Show</a>

                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('functionalgroups.edit', $functionalgroup->id) }}">Edit</a>
                            </li>
                            <li>
                                {!! Form::open(['method' => 'DELETE','route' => ['functionalgroups.destroy', $functionalgroup->id],'style'=>'display:inline']) !!}
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
            {!! $functionalgroups->links() !!}
        </div>

    </div>
@endsection