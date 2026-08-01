<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Score extends Model {
    protected $guarded = [];
    public function student() { return $this->belongsTo(Student::class); }
    public function teacher() { return $this->belongsTo(Teacher::class); }
    public function kelas() { return $this->belongsTo(Kelas::class, 'class_id'); }
}