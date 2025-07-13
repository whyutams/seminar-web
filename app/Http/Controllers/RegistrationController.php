<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{ 
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        
        return view("registration");
    }
 
}
