<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'staff';
    //mapping ke kolom/fieldnya
    protected $fillable = ['nip','name','gender','alamat','email','foto'];
}