<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panen extends Model
{
    use HasFactory;
    public $primarykey = 'panenID';
    //protected $tabel="panens";
    protected $fillable = [
        'produkID','id_kelompok_tani','user_id',
        'perkiraanPanenDate','perkiraanPanenJumlah',
        'PanenDate','PanenJumlah','satuan'
    ]; 
    static public function getPanen(){
        $return=DB::table('panens')
        ->join('produks','panens.produkID','produks.produkID');
        return $return;
    }
    public function produk(){
        return $this->belongsTo(Produk::class,'produkID','produkID');
    }
   
}