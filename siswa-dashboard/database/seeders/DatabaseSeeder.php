<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Add this
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Grade;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create the Student (Dim Table)
        $student = Student::create([
            'nisn' => '1234567890', // Naufal's Username
            'password' => Hash::make('password123'), // Naufal's Password
            'name' => 'Naufal Fasya Faddillah',
            'class_name' => 'XII IPA 2',
            'birth_place' => 'Jakarta',
            'birthdate' => '2008-05-15'
        ]);

        // 2. Create the Attendance Record (Fact Table)
        Attendance::create([
            'student_id' => $student->id,
            'semester' => 'Ganjil',
            'izin' => 2,
            'sakit' => 1,
            'tanpa_keterangan' => 0
        ]);

        // 3. Create the Grades (Fact Table)
        Grade::create([
            'student_id' => $student->id,
            'semester' => 'Semester 1',
            'mata_pelajaran' => 'Matematika',
            'nilai_tugas' => 85,
            'nilai_uts' => 80,
            'nilai_uas' => 88,
            'nilai_akhir' => 85
        ]);

        Grade::create([
            'student_id' => $student->id,
            'semester' => 'Semester 1',
            'mata_pelajaran' => 'Fisika',
            'nilai_tugas' => 78,
            'nilai_uts' => 82,
            'nilai_uas' => 80,
            'nilai_akhir' => 80
        ]);

        // ... (your existing Semester 1 grades) ...

        Grade::create([
            'student_id' => $student->id,
            'semester' => 'Semester 2',
            'mata_pelajaran' => 'Matematika',
            'nilai_tugas' => 88, 'nilai_uts' => 85, 'nilai_uas' => 90, 'nilai_akhir' => 88
        ]);

        Grade::create([
            'student_id' => $student->id,
            'semester' => 'Semester 3',
            'mata_pelajaran' => 'Matematika',
            'nilai_tugas' => 90, 'nilai_uts' => 92, 'nilai_uas' => 95, 'nilai_akhir' => 92
        ]);
        
        Grade::create([
            'student_id' => $student->id,
            'semester' => 'Semester 2',
            'mata_pelajaran' => 'Fisika',
            'nilai_tugas' => 80, 'nilai_uts' => 85, 'nilai_uas' => 82, 'nilai_akhir' => 82
        ]);
    }
}