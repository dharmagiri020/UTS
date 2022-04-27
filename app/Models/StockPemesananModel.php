<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StockPemesananModel extends Model
{
    public function allData()
    {
        return DB::table('product')->get();
    }

    public function detailData($idproduk)
    {
        return DB::table('product')->where('idproduk', $idproduk)->first();
    }

    public function addData($data)
    {
        DB::table('product')->insert($data);
    }

    public function ubahData($idproduk,$data)
    {
        DB::table('product')
            ->where('idproduk', $idproduk)
            ->update($data);
    }

    public function hapusData($idproduk)
    {
        DB::table('product')
            ->where('idproduk', $idproduk)
            ->delete();
    }
}
