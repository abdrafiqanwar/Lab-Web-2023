<!-- resources/views/job_posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Job Post Details</h1>
        <h2>{{ $jobPost->position }}</h2>

        <!-- Tampilkan detail job post -->
        <p>Location: {{ $jobPost->location }}</p>
        <p>Job Type: {{ $jobPost->job_type }}</p>
        <p>Phone: {{ $jobPost->phone }}</p>
        <p>Email: {{ $jobPost->email }}</p>
        <p>Description: {{ $jobPost->description }}</p>
        <p>Salary: {{ $jobPost->salary }}</p>
        <!-- Tampilkan field lainnya sesuai kebutuhan -->

        <!-- Tampilkan tombol untuk kembali ke daftar job posts -->
        <a href="{{ route('job_posts1.index') }}" class="btn btn-secondary">Back to Job Posts</a>
    </div>
@endsection
