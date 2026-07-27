<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // No need to query the database! Laravel holds the user in the session.
        return view('dashboard');
    }
}