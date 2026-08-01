<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {
    protected $table = 'classes'; // Points to our new table name
    protected $guarded = [];
    public function students() { return $this->belongsToMany(Student::class, 'class_student', 'class_id', 'student_id'); }
    public function scores() { return $this->hasMany(Score::class); }
}