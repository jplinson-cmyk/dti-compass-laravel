@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Bureaus / Offices</h1>
        <div class="lead">
            <a href="{{ route('bureaus_offices.create') }}" class="btn btn-sm float-end text-white mb-4"
                style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Bureau / Offices</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <tr>
                <th width="1%">No</th>
                <th>Bureau Offices</th>
                <th>Short Name</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($bureaus_offices as $key => $bureaus_office)
                <tr>
                    <td>{{ $bureaus_office->id }}</td>
                    <td>{{ $bureaus_office->name }}</td>
                    <td>{{ $bureaus_office->short_name }}</td>
                    <td>
                        <div class="btn-group dropstart">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('bureaus_offices.show', $bureaus_office->id) }}">Show</a>

                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('bureaus_offices.edit', $bureaus_office->id) }}">Edit</a>
                                </li>
                                <li>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['bureaus_offices.destroy', $bureaus_office->id],
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
            {!! $bureaus_offices->links() !!}
        </div>

    </div>
@endsection
