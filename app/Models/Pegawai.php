<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'pegawai';
    //mapping ke kolom/fieldnya
    protected $fillable = ['nip','nama','jabatan_id','divisi_id','gender',
                           'tmp_lahir','tgl_lahir','alamat','foto'];
    //relasi one to many ke tabel pelatihan
    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class);
    }

    //relasi one to one ke tabel gaji
    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }

    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}