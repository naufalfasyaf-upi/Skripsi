<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.siswa.create');
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