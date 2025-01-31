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
    public $timestamps = false;

    protected $fillable = [
        'kd_laporan',
        'judul',
        'tgl_dibuat',
        'desk_lap',
        'status_periksa',
        'file',
        'kd_member',
        'alasan_penolakan' 
    ];
    protected $dates = ['tgl_dibuat'];
    // Model Laporan
    public function user()
    {
        return $this->belongsTo(User::class, 'kd_member');
    }
    public function komunitas()
{
    return $this->belongsTo(Komunitas::class, 'kd_komunitas', 'kd_komunitas');
}
}

