<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject; // 1. Changed from Mapel to Subject
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        // 2. Fetching from the new Subject model
        $mapelList = Subject::all(); 
        return view('admin.mapel.index', compact('mapelList'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            // 3. Validation updated to check the new 'subjects' table!
            'name' => 'required|string|max:255|unique:subjects,name',
        ]);

        Subject::create(['name' => $request->name]);

        return redirect()->route('admin.mapel.index')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    // 4. Safely using the ID to find and delete from the Subject model
    public function destroy($id)
    {
        $mapel = Subject::findOrFail($id);
        $mapel->delete();
        
        return redirect()->route('admin.mapel.index')->with('success', 'Mata Pelajaran berhasil dihapus!');
    }
}