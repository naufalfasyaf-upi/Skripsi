<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class AnalisisController extends Controller
{
    public function index()
    {
        $student = Auth::user();
        
        // Fetch all scores for this student across all years
        $allScores = Score::with('teacher')->where('student_id', $student->id)->get();

        $analisisData = [];

        foreach ($allScores as $score) {
            $subject = $score->teacher->subject ?? 'Unknown';
            
            // Extract the grade level (e.g., "X", "XI", "XII" from "XII IPA 2")
            $gradeLevel = explode(' ', $score->class_name)[0]; 
            $semesterName = $score->semester; // "Semester 1" or "Semester 2"

            // Map Class + Semester to a 1-6 continuous scale
            $mappedSemester = 1;
            if ($gradeLevel === 'X') {
                $mappedSemester = ($semesterName === 'Semester 1') ? 1 : 2;
            } elseif ($gradeLevel === 'XI') {
                $mappedSemester = ($semesterName === 'Semester 1') ? 3 : 4;
            } elseif ($gradeLevel === 'XII') {
                $mappedSemester = ($semesterName === 'Semester 1') ? 5 : 6;
            }

            // Group by subject and assign the final grade to the correct mapped semester
            if (!isset($analisisData[$subject])) {
                $analisisData[$subject] = [
                    1 => '-', 2 => '-', 3 => '-', 4 => '-', 5 => '-', 6 => '-',
                    'performa' => '0%'
                ];
            }

            $analisisData[$subject][$mappedSemester] = $score->nilai_akhir ?? '-';
        }

        // Optional: Calculate "Performa" (e.g., trend between Sem 1 and current)
        // For now, we pass the structured data to the view
        return view('analisis', compact('analisisData'));
    }
}