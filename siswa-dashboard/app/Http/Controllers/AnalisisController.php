<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    public function index()
    {
        $student = Student::with('grades')->first();

        // Pivot the Fact table data into a wide format for the view
        $analisisData = $student->grades->groupBy('mata_pelajaran')->map(function ($grades, $subject) {
            // Key the grades by their semester for easy lookup
            $semesters = $grades->keyBy('semester');
            
            return [
                'mata_pelajaran' => $subject,
                'semester_1' => $semesters->get('Semester 1')->nilai_akhir ?? '-',
                'semester_2' => $semesters->get('Semester 2')->nilai_akhir ?? '-',
                'semester_3' => $semesters->get('Semester 3')->nilai_akhir ?? '-',
                'semester_4' => $semesters->get('Semester 4')->nilai_akhir ?? '-',
                'semester_5' => $semesters->get('Semester 5')->nilai_akhir ?? '-',
                'performa' => 'Stabil', // This can be replaced with custom trend logic later
            ];
        });

        return view('analisis', compact('student', 'analisisData'));
    }
}