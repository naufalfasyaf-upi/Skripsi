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

        // Attempt to log in by matching the 'username' input to the 'nisn' column
        if (Auth::attempt(['nisn' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Redirect to the dashboard on success
            return redirect()->intended('/dashboard');
        }

        // Return back with an error if it fails
        return back()->withErrors([
            'username' => 'NISN atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}