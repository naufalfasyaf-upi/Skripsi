<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Kelas;

class StudentController extends Controller
{
    // READ: Show all students
    public function index()
    {
        $students = Student::all();
        return view('admin.siswa.index', compact('students'));
    }

    // CREATE: Show the form to add a new student
    public function create()
    {
        // Fetch all classes from the database
        $kelasList = Kelas::all(); 
        
        // Pass them to the view
        return view('admin.siswa.create', compact('kelasList')); 
    }

    // EDIT: Show the form to edit an existing student
    public function edit(Student $siswa)
    {
        // Fetch classes for the dropdown
        $kelasList = \App\Models\Kelas::all(); 
        
        return view('admin.siswa.edit', compact('siswa', 'kelasList'));
    }

    // UPDATE: Save the changes to the database
    public function update(Request $request, Student $siswa)
    {
        $validated = $request->validate([
            // Ignore this student's ID when checking for unique NISN
            'nisn' => 'required|unique:students,nisn,' . $siswa->id, 
            'name' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'birth_place' => 'nullable|string',
            'birthdate' => 'nullable|date',
            'password' => 'nullable|min:6', // Password is now optional
        ]);

        // Only encrypt and update the password if the admin typed a new one
        if ($request->filled('password')) {
            $validated['password'] = \Illuminate\Support\Facades\Hash::make($request->password);
        } else {
            // If left blank, remove it from the array so the old password stays intact
            unset($validated['password']); 
        }

        $siswa->update($validated);

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    // STORE: Save the new student to the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|unique:students,nisn',
            'password' => 'required|min:6',
            'name' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'birth_place' => 'nullable|string',
            'birthdate' => 'nullable|date',
        ]);

        // Encrypt the password before saving
        $validated['password'] = Hash::make($validated['password']);

        Student::create($validated);

        return redirect()->route('admin.siswa.index')->with('success', 'Akun siswa berhasil dibuat!');
    }

    // DELETE: Remove a student
    public function destroy(Student $siswa)
    {
        $siswa->delete();
        return redirect()->route('admin.siswa.index')->with('success', 'Akun siswa berhasil dihapus!');
    }
}