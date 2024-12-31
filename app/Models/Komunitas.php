<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;

    protected $table = 'komunitas'; // Nama tabel di database
    protected $primaryKey = 'kd_komunitas'; // Primary key tabel
    public $incrementing = false; // Karena primary key bukan integer auto-increment
    protected $keyType = 'string';
    protected $fillable = [
        'kd_komunitas',
        'nm_komunitas',
        'desk_komunitas',
        'nm_pic',
        'status',
        'tanggal_dibuat',
        'logo',
        'foto_struktur',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'kd_komunitas', 'kd_komunitas');
    }

    public function diskusi()
    {
        return $this->hasMany(Diskusi::class, 'kd_komunitas', 'kd_komunitas');
    }
}
