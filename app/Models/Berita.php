<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'informasi';
    protected $primaryKey = 'kd_info';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kd_info',
        'judul_berita',
        'isi_berita',
        'status_info',
        'kategori_berita',
        'foto_berita',
        'author',
        'tanggal_dibuat',
        'views',
        'likes'
    ];

    protected $casts = [
        'tanggal_dibuat' => 'date'
    ];

    // Get formatted date
    public function getFormattedDateAttribute()
    {
        return $this->tanggal_dibuat->format('d M Y');
    }
    public function komentar()
    {
        return $this->hasMany(KomentarInfo::class, 'kd_info', 'kd_info');
    }
}
