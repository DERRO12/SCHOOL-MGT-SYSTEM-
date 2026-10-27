@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('header', 'Administrator Dashboard')

@section('content')
    <div class="row g-4">
        @foreach ([
            ['label' => 'Students', 'count' => $studentCount, 'icon' => 'people', 'color' => 'primary'],
            ['label' => 'Courses', 'count' => $courseCount, 'icon' => 'journal-bookmark', 'color' => 'success'],
            ['label' => 'Registrations', 'count' => $registrationCount, 'icon' => 'card-checklist', 'color' => 'warning'],
        ] as $stat)
            <div class="col-md-4">
                <div class="card shadow-sm border-0 border-start border-4 border-{{ $stat['color'] }}">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-muted small">{{ $stat['label'] }}</div>
                            <div class="fs-2 fw-semibold">{{ $stat['count'] }}</div>
                        </div>
                        <i class="bi bi-{{ $stat['icon'] }} fs-1 text-{{ $stat['color'] }}"></i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
