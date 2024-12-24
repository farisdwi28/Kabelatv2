<?php

namespace App\Models;

use App\Http\Controllers\KomentarDiskusiController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;

    protected $table = 'diskusi'; // Nama tabel
    protected $primaryKey = 'kd_diskusi'; // Primary key
    public $incrementing = false; // Non-incrementing key
    protected $keyType = 'string'; // Tipe data primary key
    public $timestamps = false; // Nonaktifkan timestamps otomatis
    protected $fillable = ['kd_diskusi', 'topik_diskusi', 'isi_diskusi', 'tglpost_diskusi'];

    public function komentars()
    {
        return $this->hasMany(KomentarDiskusi::class, 'kd_diskusi', 'kd_diskusi');
    }
}
