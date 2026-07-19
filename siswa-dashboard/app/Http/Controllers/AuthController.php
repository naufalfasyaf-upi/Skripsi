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

        // 1. Attempt Admin Login (Matches 'username' input to the 'username' column)
        if (Auth::guard('admin')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        // 2. Attempt Student Login (Matches 'username' input to the 'nisn' column)
        if (Auth::guard('web')->attempt(['nisn' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        // 3. If both fail, send them back with an error
        return back()->withErrors([
            'username' => 'Username/NISN atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        // Log out of both potential guards
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}