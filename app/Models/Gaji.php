<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $table = 'gaji';
    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}