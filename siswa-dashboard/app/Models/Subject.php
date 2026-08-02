<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Allows us to save data without mass-assignment errors
    protected $guarded = [];

    // Defines the relationship to the Teachers table
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}