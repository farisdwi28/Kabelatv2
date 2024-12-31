<?php
// app/Models/Diskusi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;

    protected $table = 'diskusi';
    protected $primaryKey = 'kd_diskusi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'kd_diskusi',
        'topik_diskusi',
        'isi_diskusi',
        'tglpost_diskusi',
        'id',
        'kd_komunitas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function komentars()
    {
        return $this->hasMany(KomentarDiskusi::class, 'kd_diskusi', 'kd_diskusi')
                    ->orderBy('tglpost_kom_diskusi', 'desc');
    }
    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class, 'kd_komunitas', 'kd_komunitas');
    }
}
