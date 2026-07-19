<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // This disables mass assignment protection for this model
    protected $guarded = []; 

    // Optional: Add the inverse relationship while you are here
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}