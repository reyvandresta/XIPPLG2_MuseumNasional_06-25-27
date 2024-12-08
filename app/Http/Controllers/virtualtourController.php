<?php

namespace App\Http\Controllers;

use App\Models\VirtualTour; // Pastikan Anda mengimpor model yang benar
use Illuminate\Http\Request;

class VirtualTourController extends Controller
{
    public function virtualtour()
    {
        // Ambil data virtual tours dari model
        $virtualTours = VirtualTour::all(); // Pastikan model ini ada

        // Kembalikan view dengan data
        return view('virtualtour', compact('virtualTours'));
    }
}