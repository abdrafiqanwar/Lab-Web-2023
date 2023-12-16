<!-- resources/views/job_posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Job Posts</h1>
        <div class="row">
            @foreach($jobPosts as $jobPost)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $jobPost->position }}</h5>
                            <p class="card-text">Location: {{ $jobPost->location }}</p>
                            <p class="card-text">Job Type: {{ $jobPost->job_type }}</p>
                            <div class="justify-content-between align-items-center mt-3">
                                <a href="{{ route('applied.jobs', $jobPost->id) }}" class="btn btn-success mt-2">Apply</a>
                                <a href="{{ route('job_posts.show', $jobPost->id) }}" class="btn btn-primary mt-2">Show</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
