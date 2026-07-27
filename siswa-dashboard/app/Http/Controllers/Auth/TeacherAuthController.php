<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('guru.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('teacher')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('guru.dashboard');
        }

        return back()->withErrors([
            'nama' => 'NIP atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('teacher')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('guru.login');
    }
}
