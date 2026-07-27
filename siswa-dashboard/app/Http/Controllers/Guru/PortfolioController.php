<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $kelasList = \App\Models\Kelas::all();
        $selectedKelas = $request->get('kelas');
        $selectedSemester = $request->get('semester');

        $students = collect();
        $scores = collect();

        if ($selectedKelas && $selectedSemester) {
            $students = \App\Models\Student::where('class_name', $selectedKelas)->get();
            
            $scores = \App\Models\Score::where('teacher_id', Auth::guard('teacher')->id())
                ->where('semester', $selectedSemester)
                ->where('class_name', $selectedKelas) // STRICT FILTER: Ensures Class X and Class XI don't mix
                ->whereIn('student_id', $students->pluck('id'))
                ->get()
                ->keyBy('student_id');
        }

        return view('guru.portfolio', compact('kelasList', 'selectedKelas', 'selectedSemester', 'students', 'scores'));
    }

    public function store(Request $request)
    {
        $teacherId = Auth::guard('teacher')->id();
        $semester = $request->semester;
        $className = $request->kelas; // We need to pass this from the form!
        $scoresData = $request->scores; 

        if (!$scoresData || !$semester || !$className) {
            return back()->with('error', 'Data tidak valid.');
        }

        foreach ($scoresData as $studentId => $data) {
            if ($data['nilai_tugas'] != null || $data['nilai_uts'] != null || $data['nilai_uas'] != null || $data['nilai_akhir'] != null) {
                Score::updateOrCreate(
                    [
                        'student_id' => $studentId,
                        'teacher_id' => $teacherId,
                        'class_name' => $className, // Saves "X IPA 2" or "XI IPA 2" historically
                        'semester' => $semester,
                    ],
                    [
                        'nilai_tugas' => $data['nilai_tugas'],
                        'nilai_uts' => $data['nilai_uts'],
                        'nilai_uas' => $data['nilai_uas'],
                        'nilai_akhir' => $data['nilai_akhir'],
                    ]
                );
            }
        }
        return back()->with('success', 'Nilai berhasil disimpan!');
    }
}
