<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaPelangganController extends Controller
{
    public function index()
    {
        
        return view('v_kelola_pelanggan');
    }
}
