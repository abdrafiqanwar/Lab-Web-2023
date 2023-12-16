<!-- resources/views/job_posts/create.blade.php -->
@extends('layouts.app1')

@section('content')
    <h1>Create New Job Post</h1>

    <!-- Form untuk membuat job post baru -->
    <form action="{{ route('job_posts.store') }}" method="POST">
        @csrf
        <!-- Tambahkan field sesuai dengan kebutuhan -->
        <label for="nama_pekerjaan">Nama Pekerjaan:</label>
        <input type="text" name="nama_pekerjaan">

        <!-- Tambahkan field lainnya sesuai kebutuhan -->

        <button type="submit">Submit</button>
    </form>
@endsection
