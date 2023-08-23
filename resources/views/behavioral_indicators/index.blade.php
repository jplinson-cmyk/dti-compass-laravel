@extends('layouts.app-master')

@section('content')

    <h1 class="mb-3">DTI COMPASS</h1>

    <div class="bg-light p-4 rounded">
        <h2>Behavioral Indicators</h2>
        <div class="lead">
            Manage your Behavioral Indicators here.
            <a href="{{ route('behavioral_indicators.create') }}" class="btn btn-primary btn-sm float-right">Add Behavioral Indicator</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="1%">No</th>
                <th>Category Name</th>
                <th>Competency Name</th>
                <th>Description</th>
                <th>Level</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
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
                        <a class="btn btn-info btn-sm" href="{{ route('behavioral_indicators.show', $indicator->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('behavioral_indicators.edit', $indicator->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['behavioral_indicators.destroy', $indicator->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
