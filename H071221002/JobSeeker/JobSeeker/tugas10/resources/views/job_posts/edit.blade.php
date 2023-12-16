<!-- resources/views/job_posts/edit.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Edit Job Post</h1>

    <!-- Form untuk mengedit job post -->
    <form action="{{ route('job_posts.update', $jobPost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Isi form dengan data yang ingin diubah -->
        <label for="nama_pekerjaan">Nama Pekerjaan:</label>
        <input type="text" name="nama_pekerjaan" value="{{ $jobPost->nama_pekerjaan }}">

        <!-- Tambahkan field lainnya sesuai kebutuhan -->

        <button type="submit">Update</button>
    </form>
@endsection
