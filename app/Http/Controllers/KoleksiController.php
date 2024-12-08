<?php

namespace App\Http\Controllers;

use App\Models\Koleksi; 
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksis = Koleksi::all(); 
        return view('index', compact('koleksis')); 
    }
}
