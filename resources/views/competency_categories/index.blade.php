@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Competency Categories</h1>
        <div class="lead">
            <a href="{{ route('competency_categories.create') }}" class="btn btn-sm float-end text-white mb-4"
                style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Competency
                Category</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped bdr table-bordered table-responsive">
            <tr>
                <th width="1%">No</th>
                <th>Category Name</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($competency_categories as $key => $competency_category)
                <tr>
                    <td>{{ $competency_category->id }}</td>
                    <td>{{ $competency_category->category_name }}</td>
                    <td>
                        <div class="btn-group dropstart">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('competency_categories.show', $competency_category->id) }}">Show</a>

                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('competency_categories.edit', $competency_category->id) }}">Edit</a>
                                </li>
                                <li>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['competency_categories.destroy', $competency_category->id],
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
            {!! $competency_categories->links() !!}
        </div>

    </div>
@endsection
