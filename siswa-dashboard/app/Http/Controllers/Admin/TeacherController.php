<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject; // <--- THIS IS THE MISSING LINE!
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 


class TeacherController extends Controller
{
    // READ: Show all teachers
    public function index()
    {
        // Added 'with('subject')' to eager load the relational data and prevent N+1 query issues
        $teachers = Teacher::with('subject')->get();
        return view('admin.guru.index', compact('teachers'));
    }

    // CREATE: Show the form to add a new teacher
    public function create()
    {
        $mapelList = Subject::all(); // Fetching from the new Subjects table
        return view('admin.guru.create', compact('mapelList'));
    }

    // EDIT: Show the form to edit an existing teacher
    public function edit(Teacher $guru)
    {
        $mapelList = Subject::all();
        return view('admin.guru.edit', compact('guru', 'mapelList'));
    }

    // UPDATE: Save the changes to the database
    public function update(Request $request, Teacher $guru)
    {
        $validated = $request->validate([
            'nip' => 'required|string|unique:teachers,nip,' . $guru->id,
            'name' => 'required|string|max:255',
            // Updated to validate against the subjects database table
            'subject_id' => 'required|exists:subjects,id', 
            'password' => 'nullable|min:6',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']); 
        }

        $guru->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    // DELETE: Remove a teacher
    public function destroy(Teacher $guru)
    {
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Akun guru berhasil dihapus!');
    }

    // STORE: Save the new teacher to the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|unique:teachers,nip',
            'password' => 'required|min:6',
            // Updated to validate against the subjects database table
            'subject_id' => 'required|exists:subjects,id', 
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Teacher::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Akun guru berhasil dibuat!');
    }
    
    public function portfolio(Request $request)
    {
        // 1. Fetch all classes so the dropdown has options
        $kelasList = \App\Models\Kelas::all();
        
        // 2. Safely capture the dropdown selections from the URL (this fixes your error!)
        $selectedClassId = $request->input('class_id');
        $selectedSemester = $request->input('semester');
        
        // 3. Create empty collections so the view doesn't crash if nothing is selected yet
        $students = collect();
        $scores = collect();

        // 4. If the Guru has selected BOTH a class and a semester, fetch the students!
        if ($selectedClassId && $selectedSemester) {
            $kelas = \App\Models\Kelas::findOrFail($selectedClassId);
            
            // Grabs the students from the pivot table automatically
            $students = $kelas->students; 
        }

        // 5. Send ALL of these variables to the view
        return view('guru.portfolio', compact(
            'kelasList', 
            'selectedClassId', 
            'selectedSemester', 
            'students', 
            'scores'
        ));
    }
}