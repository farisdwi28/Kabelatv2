<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoKegiatan extends Model
{
    protected $table = 'foto_kegiatan';
    protected $primaryKey = 'kd_fotokeg';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kd_fotokeg',
        'foto_path',
        'kd_kegiatan',
        'kd_kegiatan2'
    ];

    public function getPhotoUrl()
    {
        return $this->foto_path;
    }
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kd_kegiatan', 'kd_kegiatan');
    }
}