<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // READ: Show all classes on the main table
    public function index()
    {
        // Fetch all classes and pass them to the view
        $kelasList = Kelas::all();
        return view('admin.kelas.index', compact('kelasList'));
    }

    // CREATE: Show the form to add a new class
    public function create()
    {
        return view('admin.kelas.create');
    }

    // STORE: Save the new class to the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classes,name',
            'grade_level' => 'required|in:X,XI,XII', 
        ]);

        Kelas::create([
            'name' => $validated['name'],
            'grade_level' => $validated['grade_level'],
        ]);

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil dibuat!');
    }

    // EDIT: Show the form to edit an existing class
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    // UPDATE: Save the changes to the database
    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        
        $validated = $request->validate([
            // Ignores this specific class ID for the unique check so you can save without changing the name
            'name' => 'required|string|max:255|unique:classes,name,' . $kelas->id,
            'grade_level' => 'required|in:X,XI,XII',
        ]);

        $kelas->update($validated);

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil diperbarui!');
    }

    // DELETE: Remove a class
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        
        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}