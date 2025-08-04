<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirect()
    {
        $user = Auth::user();
        $total_users = User::count();
        $total_regis = Registration::count();
        $total_keynote_speakers = Speaker::where('type', 'keynote')->count();
        $total_invited_speakers = Speaker::where('type', 'invited')->count();

        if ($user->role === 'admin' || $user->role === 'superadmin') {
            return view('dashboard.admin', compact('total_users', 'total_keynote_speakers', 'total_invited_speakers', 'total_regis'));
        } elseif ($user->role === 'user') {
            return view('dashboard-user');
        } else {
            abort(403);
        }
    }

    public function speakers()
    {
        return view("dashboard.speakers");
    }

}
