<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $keynote_speakers = Speaker::where('type', 'keynote')->get();
        $invited_speakers = Speaker::where('type', 'invited')->get();
        $landing = Landing::with('creator')->first();

        return view("index", compact('keynote_speakers', 'invited_speakers', 'landing'));
    }


}
