<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Teacher; // <-- Add this import
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        // Load the kelas with their assigned waliKelas to prevent N+1 query issues
        $kelasList = Kelas::with('waliKelas')->get(); 
        
        // Get all teachers for the dropdown
        $teachers = Teacher::all(); 

        return view('admin.kelas.index', compact('kelasList', 'teachers'));
    }
    // EDIT: Show the form to edit an existing class
    public function edit(Kelas $kela) // Laravel automatically binds the parameter as $kela
    {
        $teachers = \App\Models\Teacher::all();
        return view('admin.kelas.edit', compact('kela', 'teachers'));
    }

    // UPDATE: Save the changes to the database
    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            // Ensure the new name is unique, but ignore this exact class's ID
            'name' => 'required|string|max:255|unique:kelas,name,' . $kela->id,
            'teacher_id' => 'nullable|exists:teachers,id', // Validate the selected teacher
        ]);

        $kela->update([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('admin.kelas.index')->with('success', 'Data kelas berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:kelas,name',
            'teacher_id' => 'nullable|exists:teachers,id', // Validate the selected teacher
        ]);

        Kelas::create([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();
        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}
