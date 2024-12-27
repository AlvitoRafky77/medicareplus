<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan halaman layanan
    public function index()
    {
        return view('layanan');
    }

    public function about()
    {
        return view('about');
    }

    public function artikel()
    {
        return view('artikel');
    }
}

