<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            return redirect('/dashboard');
        }

        $keynote_speakers = Speaker::where('type', 'keynote')->get();
        $invited_speakers = Speaker::where('type', 'invited')->get();

        return view("index", compact('keynote_speakers', 'invited_speakers'));
    }


}
