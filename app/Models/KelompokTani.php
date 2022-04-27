<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokTani extends Model
{
    public $primerykey = 'id_kelompok_tani';
    protected $fillable = ['nama_kelompok'];
}

