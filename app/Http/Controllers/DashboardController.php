<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        if ($user->role == 'admin') {
            return view('admin/dashboard');
        } elseif ($user->role == 'user') {
            return view('user/dashboard');
        } 
    }
}
