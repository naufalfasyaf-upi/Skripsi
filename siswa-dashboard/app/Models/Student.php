<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable {
    protected $guarded = [];
    public function classes() { return $this->belongsToMany(Kelas::class, 'class_student', 'student_id', 'class_id'); }
    public function scores() { return $this->hasMany(Score::class); }
}