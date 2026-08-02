<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = [];

    // Connection to the Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Connection to the Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // ADD THIS NEW METHOD: Connection to the Class
    public function kelas()
    {
        // We explicitly tell it to use 'class_id' because 'kelas_id' doesn't exist in your table
        return $this->belongsTo(Kelas::class, 'class_id'); 
    }
}