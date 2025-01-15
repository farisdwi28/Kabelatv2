<?php
// app/Models/KomentarInfo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class KomentarInfo extends Model
{
    protected $table = 'komentar_info';
    protected $primaryKey = 'kd_kom_info';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kd_kom_info',
        'isi_kom_info',
        'kd_info',
        'id',
        'tglpost_kom_info',
        'likes',
        'views',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'kd_info', 'kd_info');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->tglpost_kom_info);
    }
}