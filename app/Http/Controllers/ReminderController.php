<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    // Menampilkan halaman pengingat jadwal
    public function showPengingat()
    {
        return view('pengingat.pengingat');
    }

    // Menampilkan halaman Kalender Kesehatan
    public function showJadwal()
    {
        return view('pengingat.jadwal');
    }

    public function showKalender()
    {
        return view('pengingat.kalender');
    }

}
