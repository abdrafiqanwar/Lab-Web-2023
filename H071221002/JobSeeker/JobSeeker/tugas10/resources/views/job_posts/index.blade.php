<!-- resources/views/job_posts/index.blade.php -->

@extends('layouts.app1')

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
                            <a href="{{ route('job_posts.edit', $jobPost->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('job_posts.show', $jobPost->id) }}" class="btn btn-sm btn-info">Show</a>
                            <form action="{{ route('job_posts.destroy', $jobPost->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Create Job Post</h2>
        <form action="{{ route('job_posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="job_type">Job Type:</label>
                <select class="form-control" id="job_type" name="job_type">
                    <option value="full-time">Full-time</option>
                    <option value="part-time">Part-time</option>
                    <option value="freelance">Freelance</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
