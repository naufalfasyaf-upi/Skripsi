<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // 1. Get the currently logged-in student
        $student = auth()->user();
        
        // 2. Fetch only the classes this specific student has ever been assigned to
        $classes = $student->classes; 

        // 3. Grab the selected dropdown values from the URL
        $selectedClassId = $request->input('class_id');
        $selectedSemester = $request->input('semester');

        $scores = collect();

        // 4. If they selected both a class and a semester, fetch their scores!
        if ($selectedClassId && $selectedSemester) {
            // We use 'with' to eager-load the Teacher and Subject data so we can display the names easily
            $scores = Score::with('teacher.subject')
                ->where('student_id', $student->id)
                ->where('class_id', $selectedClassId)
                ->where('semester', $selectedSemester)
                ->get();
        }

        return view('portfolio', compact(
            'classes', 
            'selectedClassId', 
            'selectedSemester', 
            'scores'
        ));
    }
}