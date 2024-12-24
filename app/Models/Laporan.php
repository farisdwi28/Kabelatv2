<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan'; // Nama tabel di database
    protected $primaryKey = 'kd_laporan'; // Primary key

    public $incrementing = false; // Tidak menggunakan auto-increment
    protected $keyType = 'string'; // Tipe primary key CHAR(5)

    protected $fillable = [
        'kd_laporan',
        'judul',
        'tgl_dibuat',
        'desk_lap',
        'status_periksa',
        'file',
        'kd_member',
    ];
}
