<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan model yang digunakan sudah di-import
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $beritas = Berita::all(); // Ambil semua data berita
        return view('berita', compact('beritas')); // Ganti 'berita' dengan nama view yang sesuai
    }
}