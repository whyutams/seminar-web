<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'department' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|max:20',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
            'institution' => $request->institution,
            'country' => $request->country,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'added_by' => null
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
