@extends('layouts.app-master')

@section('content')

<div class="bg-white p-4 rounded mt-4">
    <h1>Behavioral Indicators</h1>

    <div class="lead">
        <a href="{{ route('behavioral_indicators.create') }}" class="btn btn-sm float-end text-white mb-4"
            style="background-color: #1E4387;"><i class="fa fa-plus" aria-hidden="true"></i> Add new Behavioral Indicator</a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

    <table id="behavioralIndicatorsTable" class="table table-striped bdr table-bordered table-responsive">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th>Category Name</th>
                <th>Competency Name</th>
                <th>Description</th>
                <th>Level</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($behavioralIndicators as $key => $indicator)
                <tr>
                    <td>{{ $indicator->id }}</td>
                    <td>{{ $indicator->competency->competencyCategory->category_name ?? 'No Category' }}</td>
                    <td>{{ $indicator->competency->name }}</td>
                    <td>{{ $indicator->description }}</td>
                    <td>
                        @php
                            $levelMapping = [
                                1 => 'Basic',
                                2 => 'Intermediate',
                                3 => 'Advanced',
                                4 => 'Superior',
                            ];
                            $levelText = $levelMapping[$indicator->level] ?? 'Unknown';
                        @endphp
                        {{ $levelText }}
                    </td>
                    <td>
                        <div class="btn-group dropstart">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{ route('behavioral_indicators.show', $indicator->id) }}">Show</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('behavioral_indicators.edit', $indicator->id) }}">Edit</a>
                                </li>
                                <li>
                                    {!! Form::open(['method' => 'DELETE','route' => ['behavioral_indicators.destroy', $indicator->id],'style'=>'display:inline']) !!}
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
    {{-- <div class="d-flex mt-4 justify-content-center">
        {!! $behavioralIndicators->links() !!}
    </div> --}}
</div>

@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#behavioralIndicatorsTable').DataTable({
            "processing": true,
            "serverSide": false, // Set to true if you want server-side processing
            "columnDefs": [
                {
                    "targets": [0, 4, 5],
                    "orderable": false, // Disable ordering on columns that should not be sortable
                }
            ]
        });
    });
</script>
@endsection
