<?php
// app/Models/InformasiPengumuman.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiPengumuman extends Model
{
    protected $table = 'informasi_pengumuman';
    protected $primaryKey = 'kd_info';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kd_info',
        'judul_pengumuman',
        'isi_pengumuman',
        'status_info',
        'foto_pengumuman',
        'author',
        'tanggal_dibuat'
    ];
}