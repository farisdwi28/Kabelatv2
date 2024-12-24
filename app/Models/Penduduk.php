<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi plural
    protected $table = 'penduduk';
    
    // Tentukan kolom yang bisa diisi
    protected $fillable = ['no_ktp', 'nama', 'alamat']; // Sesuaikan dengan kolom yang ada di tabel penduduk
}
