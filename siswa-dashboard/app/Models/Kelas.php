<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A class belongs to one Homeroom Teacher
    public function waliKelas()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}