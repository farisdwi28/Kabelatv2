<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarDiskusi extends Model
{
    use HasFactory;

    protected $table = 'komentar_diskusi';
    protected $primaryKey = 'kd_kom_diskusi';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kd_kom_diskusi',
        'isi_kom_diskusi',
        'kd_diskusi',
        'id',
        'tglpost_kom_diskusi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function diskusi()
    {
        return $this->belongsTo(Diskusi::class, 'kd_diskusi', 'kd_diskusi');
    }
}
