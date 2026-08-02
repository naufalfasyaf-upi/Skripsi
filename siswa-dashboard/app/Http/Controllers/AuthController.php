<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // 1. Attempt Admin Login (Matches input to 'username' column)
        if (Auth::guard('admin')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        // 2. Attempt Guru Login (Matches input to 'nip' column)
        if (Auth::guard('teacher')->attempt(['nip' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->route('guru.dashboard');
        }

        // 3. Attempt Student Login (Matches input to 'nisn' column)
        if (Auth::guard('web')->attempt(['nisn' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // Adjust to 'siswa.dashboard' if you renamed the route
        }

        // 4. If all fail, send them back with an error
        return back()->withErrors([
            'username' => 'Username/NIP/NISN atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        // Log out of ALL potential guards
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();
        Auth::guard('teacher')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}