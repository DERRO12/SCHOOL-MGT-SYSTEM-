@extends('layouts.app')

@section('title', 'Lecturer Dashboard')
@section('header', 'My Assigned Courses')

@section('content')
    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Semester</th>
                        <th>Registered students</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td class="fw-semibold">{{ $course->code }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->semester }}</td>
                            <td>{{ $course->students_count }} / {{ $course->capacity }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center text-muted py-4">No courses have been assigned to you yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
