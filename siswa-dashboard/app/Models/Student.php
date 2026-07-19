<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Change this import
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable // Change 'Model' to 'Authenticatable'
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    // This ensures passwords are never accidentally returned in queries
    protected $hidden = [
        'password',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}