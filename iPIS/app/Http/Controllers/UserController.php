<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch data from Admin and User models
        $admins = Admin::all();
        $users = User::all();

        // Merge both collections
        $allUsers = $admins->merge($users);

        return view('user-management', compact('allUsers'));
    }
}
