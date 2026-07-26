<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class TeacherController extends Controller
{
    // READ: Show all teachers
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.guru.index', compact('teachers'));
    }

    // CREATE: Show the form to add a new teacher
    public function create()
    {
        $mapelList = Mapel::all();
        return view('admin.guru.create', compact('mapelList'));
    }

    // EDIT: Show the form to edit an existing teacher
    public function edit(Teacher $guru)
    {
        $mapelList = Mapel::all();
        return view('admin.guru.edit', compact('guru', 'mapelList'));
    }


    // UPDATE: Save the changes to the database
    public function update(Request $request, Teacher $guru)
    {
        $validated = $request->validate([
            // Ignore this teacher's ID when checking for unique NIP
            'nip' => 'required|string|unique:teachers,nip,' . $guru->id,
            'name' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'password' => 'nullable|min:6', // Password is optional on update
        ]);

        // Only encrypt and update the password if the admin typed a new one
        if ($request->filled('password')) {
            $validated['password'] = \Illuminate\Support\Facades\Hash::make($request->password);
        } else {
            // Remove from array so the old password stays intact
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
            'subject' => 'nullable|string|max:255', // Mata Pelajaran
        ]);

        // Encrypt the password before saving
        $validated['password'] = Hash::make($validated['password']);

        Teacher::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Akun guru berhasil dibuat!');
    }
}