@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Behavioral Indicator</h2>
        <div class="lead">
            Behavioral Indicator Details
        </div>

        <div class="container mt-4">
            <div>
                <p><strong>Category:</strong> {{ $behavioralIndicator->competency->competencyCategory->category_name ?? 'No Category' }}</p>
                <p><strong>Competency Name:</strong> {{ $behavioralIndicator->competency->name }}</p>
                <p><strong>Description:</strong> {{ $behavioralIndicator->description }}</p>
                <p><strong>Level:</strong>
                    @php
                        $levelText = '';
                        switch ($behavioralIndicator->level) {
                            case 1:
                                $levelText = 'Basic';
                                break;
                            case 2:
                                $levelText = 'Intermediate';
                                break;
                            case 3:
                                $levelText = 'Advanced';
                                break;
                            case 4:
                                $levelText = 'Superior';
                                break;
                            default:
                                $levelText = 'Unknown';
                        }
                    @endphp
                    {{ $levelText }}
                </p>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('behavioral_indicators.edit', $behavioralIndicator->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('behavioral_indicators.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
