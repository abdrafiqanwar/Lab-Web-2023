<!-- resources/views/profiles/edit.blade.php -->


@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('profiles.update', $profile->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $profile->nama }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email/No. HP:</label>
        <input type="text" id="email" name="email" value="{{ $profile->email }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" value="{{ $profile->umur }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
            <option value="Laki-laki" @if($profile->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
            <option value="Perempuan" @if($profile->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi Singkat:</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ $profile->deskripsi }}</textarea>
    </div>

    <div class="form-group">
        <label for="skills">Skills/Certificate:</label>
        <input type="text" id="skills" name="skills" value="{{ $profile->skills }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Profil</button>
</form>

@endsection

