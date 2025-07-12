<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentasiController extends Controller
{
    public function index() {
        return view("index");
    }
    
    public function beranda() {
        return "beranda";
    }

}
