<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan halaman layanan
    public function index()
    {
        return view('layanan'); // Pastikan file layanan.blade.php ada di folder resources/views
    }
}

