<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Kelas; // Using our new Class model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class StudentController extends Controller
{
    // READ: Show all students
    public function index()
    {
        // Eager load the classes relationship to prevent N+1 query lag
        $students = Student::with('classes')->get();
        return view('admin.siswa.index', compact('students'));
    }

    // CREATE: Show the form to add a new student
    public function create()
    {
        $kelasList = Kelas::all();
        return view('admin.siswa.create', compact('kelasList'));
    }

    // STORE: Save the new student and assign their first class
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'nisn' => 'required|string|unique:students,nisn',
            'nis' => 'required|string|unique:students,nis',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'password' => 'required|min:6',
            'class_id' => 'required|exists:classes,id', 
        ]);

        // 1. Create the student record (without the class_id, as it belongs in the pivot table)
        $student = Student::create([
            'full_name' => $validated['full_name'],
            'nisn' => $validated['nisn'],
            'nis' => $validated['nis'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'password' => Hash::make($validated['password']),
        ]);

        // 2. Map the student to the class in the pivot table
        $student->classes()->attach($validated['class_id']);

        return redirect()->route('admin.siswa.index')->with('success', 'Akun siswa berhasil dibuat dan ditugaskan ke kelas!');
    }

    // EDIT: Show the form to edit
    public function edit(Student $siswa)
    {
        $kelasList = Kelas::all();
        return view('admin.siswa.edit', compact('siswa', 'kelasList'));
    }

    // UPDATE: Save changes
    public function update(Request $request, Student $siswa)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'nisn' => 'required|string|unique:students,nisn,' . $siswa->id,
            'nis' => 'required|string|unique:students,nis,' . $siswa->id,
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'password' => 'nullable|min:6',
            
            // The three new class dropdowns (nullable because they might be empty)
            'class_x' => 'nullable|exists:classes,id',
            'class_xi' => 'nullable|exists:classes,id',
            'class_xii' => 'nullable|exists:classes,id',
        ]);

        // 1. Update Basic Info
        $siswa->update([
            'full_name' => $validated['full_name'],
            'nisn' => $validated['nisn'],
            'nis' => $validated['nis'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
        ]);

        if ($request->filled('password')) {
            $siswa->update(['password' => \Illuminate\Support\Facades\Hash::make($request->password)]);
        }

        // 2. Combine the submitted classes into a clean array
        // array_filter automatically removes any empty/null values if they left a dropdown blank
        $classesToSync = array_filter([
            $request->class_x,
            $request->class_xi,
            $request->class_xii
        ]);

        // 3. Sync wipes their old classes and assigns exactly what is in the array!
        $siswa->classes()->sync($classesToSync);

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa dan riwayat kelas berhasil diperbarui!');
    }

    // DELETE: Remove a student
    public function destroy(Student $siswa)
    {
        $siswa->delete(); // This will automatically delete the pivot table record too because of cascadeOnDelete!
        return redirect()->route('admin.siswa.index')->with('success', 'Akun siswa berhasil dihapus!');
    }

    private function assignClassToStudent(Student $student, $newClassId)
    {
        // 1. Find the new class to check its grade level ('X', 'XI', or 'XII')
        $newClass = Kelas::findOrFail($newClassId);

        // 2. Get the student's currently assigned classes
        $currentClasses = $student->classes;

        // 3. Filter the current classes: KEEP classes that have a DIFFERENT grade level
        // (This automatically drops the old Class X if we are trying to add a new Class X)
        $classIdsToKeep = $currentClasses->reject(function ($kelas) use ($newClass) {
            return $kelas->grade_level === $newClass->grade_level;
        })->pluck('id')->toArray();

        // 4. Add the new Class ID to our clean list
        $classIdsToKeep[] = $newClass->id;

        // 5. Sync updates the pivot table. 
        // It removes anything not in the array and adds what's missing.
        $student->classes()->sync($classIdsToKeep);
    }
}