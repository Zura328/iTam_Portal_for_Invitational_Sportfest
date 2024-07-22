<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        // Your admin dashboard logic
        return view('admin.dashboard');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin';

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials or role']);
    }
}
