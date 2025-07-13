<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirect()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('dashboard.admin');
        } elseif ($user->role === 'user') {
            return view('dashboard.user');
        } else {
            abort(403);
        }
    }

}
