@extends('layouts.app')

@section('title', 'Student Dashboard')
@section('header', 'My Registered Courses')

@section('content')
    @if ($student)
        <p class="text-muted">
            {{ $student->full_name }} &middot; {{ $student->registration_number }} &middot; {{ $student->programme }}, Year {{ $student->year_of_study }}
        </p>
    @else
        <div class="alert alert-warning">Your account is not linked to a student record yet. Please contact the administrator.</div>
    @endif

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credit units</th>
                        <th>Academic year</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td class="fw-semibold">{{ $course->code }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->credit_units }}</td>
                            <td>{{ $course->pivot->academic_year }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center text-muted py-4">You have not registered for any courses yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
