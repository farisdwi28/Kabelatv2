<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';
    protected $primaryKey = 'kd_info';
    public $incrementing = false;
    protected $keyType = 'string';
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
        'kd_kecamatan',
        'likes',
        'views',
        'id'
    ];

    protected $casts = [
        'author' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}