<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('email', 'password');
    
            $user = User::where('email', $credentials['email'])->first();
    
            if (!$user) {
                return back()->withErrors([
                    'email' => 'Email tidak terdaftar',
                ]);
            }
    
            if (!Hash::check($credentials['password'], $user->password)) {
                return back()->withErrors([
                    'password' => 'Password yang Anda masukkan salah',
                ]);
            }
    
            Auth::login($user);

            if ($user->role == 'admin') {
                return redirect('admin/dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('dashboard');
            }
        }
    
        return view('auth/login');
    }
    
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string',
                'gender' => 'required|string',
                'date_of_birth' => 'required|date',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
                'confirm_password' => 'required|string|min:6',
            ]);

            if ($request->password !== $request->confirm_password) {
                return back()->withErrors([
                    'confirm_password' => 'Konfirmasi password tidak sama',
                ])->withInput();
            }

            $user = User::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'role' => 'user',
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('dashboard');
        }

        return view('auth/register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
