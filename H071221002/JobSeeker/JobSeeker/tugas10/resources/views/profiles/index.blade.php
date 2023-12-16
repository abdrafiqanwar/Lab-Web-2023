@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Notifikasi Setelah Aksi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Daftar Profil -->
    <h1>Daftar Profil</h1>

    <table class="table table-striped">
        <!-- Tabel untuk menampilkan daftar profil -->
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Email/No. HP</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Deskripsi</th>
                <th>Skills/Certificate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->nama }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ $profile->umur }}</td>
                <td>{{ $profile->jenis_kelamin }}</td>
                <td>{{ $profile->deskripsi }}</td>
                <td>{{ $profile->skills }}</td>
                <td>
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <!-- Tambahkan form delete jika diperlukan -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <!-- Form untuk membuat profil baru -->
    <h1>Tambah Profil Baru</h1>

    <form method="POST" action="{{ route('profiles.store') }}">
        @csrf

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email/No. HP:</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Singkat:</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="skills">Skills/Certificate:</label>
            <input type="text" id="skills" name="skills" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Profil</button>
    </form>
</div>
@endsection
