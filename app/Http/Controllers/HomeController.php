<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_produk' => 'Softcase',
            'deskripsi' => 'Samsung',
        ];
        return view('v_home', $data);
    }

    public function about($id)
    {
        return 'Ini Halaman About<br>'. $id;
    }
}
