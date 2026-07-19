<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
