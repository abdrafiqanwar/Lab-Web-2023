<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'umur',
        'jenis_kelamin',
        'deskripsi',
        'skills',
    ];
}
