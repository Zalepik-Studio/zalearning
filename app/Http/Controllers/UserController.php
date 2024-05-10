<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $user = auth()->user();
        $users = User::where('role', '!=', 'admin')->get(); 
      
        if ($user->role == 'admin') {
            return view('admin/users', ['users' => $users]); 
        } elseif ($user->role == 'user') {
            return view('user/users', ['users' => $users]);
        } 
    }
}
