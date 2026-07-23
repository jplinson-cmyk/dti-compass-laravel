@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Permissions</h1>
        <div class="lead">
            <a href="{{ route('permissions.create') }}" class="btn btn-sm float-end text-white mb-4"
            style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new permissions</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <thead>
            <tr>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Guard</th> 
                <th scope="col" colspan="3" width="1%"></th> 
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            <div class="btn-group dropstart">
                                <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="{{ route('permissions.edit', $permission->id) }}" class="dropdown-item">Edit</a>
                                    </li>
                                    <li>
                                        {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                                        {!! Form::close() !!}
                                    </li>
                                    
                                </ul>
                            </div>
                        </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex mt-4 justify-content-center">
            {!! $permissions->links() !!}
        </div>
    </div>
@endsection
@section("scripts")

@endsection
