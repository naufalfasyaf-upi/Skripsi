<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable {
    protected $guarded = [];
    public function subject() { return $this->belongsTo(Subject::class); }
    public function scores() { return $this->hasMany(Score::class); }
}