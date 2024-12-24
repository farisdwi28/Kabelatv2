<?php
// app/Models/KomentarDiskusi.php

// app/Models/KomentarDiskusi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarDiskusi extends Model
{
    use HasFactory;

    protected $table = 'komentar_diskusi'; // Tabel untuk komentar
    protected $primaryKey = 'kd_kom_diskusi';

    // Relasi ke diskusi
    public function diskusi()
    {
        return $this->belongsTo(Diskusi::class, 'kd_diskusi', 'kd_diskusi');
    }

    // Relasi ke user (asumsi ada tabel users)
    public function user()
    {
        return $this->belongsTo(User::class, 'kd_user', 'id');
    }
}

