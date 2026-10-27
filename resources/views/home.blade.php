@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <h1 class="display-6 fw-semibold">Student Management System</h1>
        <p class="lead text-muted">
            Manage students, courses, lecturers and course registrations in one place.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-shield-lock"></i> Administrators</h5>
                    <p class="card-text text-muted">Manage students, courses, registrations and user access.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-person-video3"></i> Lecturers</h5>
                    <p class="card-text text-muted">View assigned courses and the students registered for them.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-people"></i> Students</h5>
                    <p class="card-text text-muted">Browse available courses and manage their own registrations.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
