<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;  // Pastikan untuk mengimpor model Koleksi
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksis = Koleksi::all();  // Mengambil semua data koleksi dari model
        return view('index', compact('koleksis'));  // Mengirim data ke view
    }
}
