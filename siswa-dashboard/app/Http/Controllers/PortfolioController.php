<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Get the currently logged-in student
        $student = auth()->user();

        // Check if the student selected a semester to view, default to "Semester 1"
        $selectedSemester = $request->get('semester', 'Semester 1');

        // Fetch scores only for this specific student, for the chosen semester
        $scores = Score::with('teacher') // Eager load the teacher data
            ->where('student_id', $student->id)
            ->where('semester', $selectedSemester)
            ->get();

        return view('portofolio', compact('scores', 'selectedSemester'));
    }
}