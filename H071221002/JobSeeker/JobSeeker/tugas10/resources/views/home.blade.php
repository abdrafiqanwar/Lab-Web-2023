<!-- resources/views/job_posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Job Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Location</th>
                    <th>Job Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Tampilkan data job post -->
                @foreach($jobPosts as $jobPost)
                    <tr>
                        <td>{{ $jobPost->id }}</td>
                        <td>{{ $jobPost->position }}</td>
                        <td>{{ $jobPost->location }}</td>
                        <td>{{ $jobPost->job_type }}</td>
                        <td>
                            <!-- Tambahkan tombol untuk edit dan delete -->
                            <a href="{{ route('job_posts.show', $jobPost->id) }}" class="btn btn-sm btn-info">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

