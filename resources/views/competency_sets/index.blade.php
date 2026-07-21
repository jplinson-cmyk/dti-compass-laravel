@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Competency Sets</h1>
        <div class="row">
            <div class="col">
                <a href="{{ route('competency_sets.create') }}" class="btn btn-sm float-end text-white mb-4"
                    style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i>Add New Competency Sets</a>

            </div>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <tr>
                <th width="1%">No</th>
                <th>Functional Group Name</th>
                <th>Bureau Office</th>
                <th>Division</th>
                <th>Position</th>
                <th>Competency</th>
                <th>Standard</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($competency_sets as $key => $competency_set)
                <tr>
                    <td>{{ $competency_set->id }}</td>
                    <td>{{ $competency_set->functionalGroup->name ?? 'N/A' }}</td>
                    <td>{{ $competency_set->bureauOffice->name ?? 'N/A' }}</td>
                    <td>{{ $competency_set->division->name ?? 'N/A' }}</td>
                    <td>{{ $competency_set->position->name ?? 'N/A' }}</td>
                    <td>{{ $competency_set->competency->name ?? 'N/A' }}</td>
                    <td>{{ $competency_set->standard ?? 'N/A' }}</td>
                    <td>
                        <div class="btn-group dropstart">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('competency_sets.show', $competency_set->id) }}">Show</a>

                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('competency_sets.edit', $competency_set->id) }}">Edit</a>
                                </li>
                                <li>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['competency_sets.destroy', $competency_set->id],
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
            {!! $competency_sets->links() !!}
        </div>

    </div>
@endsection
