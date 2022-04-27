<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;
    public $primaryKey = 'id_petani';
    protected $fillable = [
        'nama', 'nik', 'alamat', 'telp', 'foto', 'id_kelompok_tani', 'status'
    ];

    public function kelompok_tani()
    {
        return $this->belongsTo(KelompokTani::class, 'id_kelompok_tani', 'id_kelompok_tani');
    }
    public function detailData($id_petani)
    {
        return DB::table('Petani')->where('id_petani', $id_petani)->first();
    }
}