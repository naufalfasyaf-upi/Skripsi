<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Score;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $kelasList = Kelas::all();
        $selectedClassId = $request->input('class_id');
        $selectedSemester = $request->input('semester'); // e.g., "Semester 1"
        
        $students = collect();
        $scores = collect();
        
        $teacher = auth('teacher')->user();

        if ($selectedClassId && $selectedSemester) {
            $kelas = Kelas::findOrFail($selectedClassId);
            $students = $kelas->students; 

            // Convert "Semester 1" to just "1" to match your Database ENUM
            $enumSemester = str_replace('Semester ', '', $selectedSemester);

            // Fetch existing scores using teacher_id and class_id
            $scores = Score::where('class_id', $selectedClassId)
                           ->where('teacher_id', $teacher->id)
                           ->where('semester', $enumSemester)
                           ->get()
                           ->keyBy('student_id');
        }

        return view('guru.portfolio', compact(
            'kelasList', 'selectedClassId', 'selectedSemester', 'students', 'scores'
        ));
    }

    public function store(Request $request)
    {
        // 1. Validate the incoming request
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'semester' => 'required|string',
            'scores'   => 'required|array',
        ]);

        $teacher = auth('teacher')->user();

        // 2. Convert "Semester 1" to just "1" to match your Database ENUM
        $enumSemester = str_replace('Semester ', '', $request->semester);

        // 3. Loop through the array of scores sent from the HTML table
        foreach ($request->scores as $studentId => $scoreData) {
            
            // 4. Update if exists, Create if it doesn't!
            Score::updateOrCreate(
                [
                    // Search criteria matching your schema's unique constraint
                    'student_id' => $studentId,
                    'teacher_id' => $teacher->id,
                    'class_id'   => $request->class_id,
                    'semester'   => $enumSemester,
                ],
                [
                    // Data to save
                    'nilai_tugas' => $scoreData['nilai_tugas'] ?? null,
                    'nilai_uts'   => $scoreData['nilai_uts'] ?? null,
                    'nilai_uas'   => $scoreData['nilai_uas'] ?? null,
                    'nilai_akhir' => $scoreData['nilai_akhir'] ?? null,
                ]
            );
        }

        return redirect()->back()->with('success', 'Berhasil menyimpan nilai untuk kelas ini!');
    }
}