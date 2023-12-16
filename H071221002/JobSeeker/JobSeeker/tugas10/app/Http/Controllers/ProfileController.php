<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'deskripsi' => 'required',
            'skills' => 'required',
        ]);

        Profile::create($validatedData);

        return redirect()->route('profiles.index')->with('success', 'Profil berhasil dibuat!');
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'deskripsi' => 'required',
            'skills' => 'required',
        ]);

        $profile->update($validatedData);

        return redirect()->route('profiles.index')->with('success', 'Profil berhasil diperbarui!');
    }
}
