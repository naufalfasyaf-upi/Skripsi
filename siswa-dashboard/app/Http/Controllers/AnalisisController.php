<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class AnalisisController extends Controller
{
    public function index()
    {
        $student = auth()->user();
        
        // Fetch all scores for this student, including the teacher, subject, and class data
        $scores = Score::with(['teacher.subject', 'kelas'])
            ->where('student_id', $student->id)
            ->get();

        $analisisData = [];

        foreach ($scores as $score) {
            // Safely get the subject name
            $subjectName = $score->teacher->subject->name ?? 'Mata Pelajaran';
            
            // If this is the first time seeing this subject, create an empty row for it
            if (!isset($analisisData[$subjectName])) {
                $analisisData[$subjectName] = [
                    1 => '-', 2 => '-', 3 => '-', 4 => '-', 5 => '-', 6 => '-', 'performa' => '-'
                ];
            }

            // Determine Absolute Semester (1 through 6)
            $gradeLevel = $score->kelas->grade_level ?? '';
            $semesterEnum = $score->semester; // '1' or '2'
            $absoluteSemester = null;

            if ($gradeLevel === 'X') {
                $absoluteSemester = ($semesterEnum == '1') ? 1 : 2;
            } elseif ($gradeLevel === 'XI') {
                $absoluteSemester = ($semesterEnum == '1') ? 3 : 4;
            } elseif ($gradeLevel === 'XII') {
                $absoluteSemester = ($semesterEnum == '1') ? 5 : 6;
            }

            // If we found a valid semester slot, insert the "Nilai Akhir"
            if ($absoluteSemester && $score->nilai_akhir !== null) {
                $analisisData[$subjectName][$absoluteSemester] = $score->nilai_akhir;
            }
        }

        // Calculate "Performa" (Average score across all available semesters)
        foreach ($analisisData as $subject => &$data) {
            $total = 0;
            $count = 0;
            
            for ($i = 1; $i <= 6; $i++) {
                if ($data[$i] !== '-') {
                    $total += $data[$i];
                    $count++;
                }
            }
            
            if ($count > 0) {
                // Calculates the average, rounded to 1 decimal
                $data['performa'] = round($total / $count, 1); 
            }
        }

        return view('analisis', compact('analisisData'));
    }
}