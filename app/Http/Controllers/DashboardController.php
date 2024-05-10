<?php

namespace App\Http\Controllers;

use App\Models\GetClass;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $totalUsers = User::where('role', '!=', 'admin')->count();
        $classTotals = GetClass::count();

        if ($user->role == 'admin') {
            return view('admin/dashboard', ['totalUsers' => $totalUsers], ['classTotals' => $classTotals]);
        } elseif ($user->role == 'user') {
            return view('user/dashboard', ['totalUsers' => $totalUsers], ['classTotals' => $classTotals]);
        } 
    }
}
