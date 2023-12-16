<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'location',
        'job_type',
        'phone',
        'email',
        'description',
        'salary',
    ];

    public function applicants()
    {
        return $this->belongsToMany(User::class, 'job_applications');
    }
}
