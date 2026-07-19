<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Default to Semester 1 if no dropdown filter is applied yet
        $semester = $request->query('semester', 'Semester 1'); 

        $student = Student::with(['grades' => function($query) use ($semester) {
            $query->where('semester', $semester);
        }])->first(); 
        
        return view('portofolio', compact('student', 'semester'));
    }
}