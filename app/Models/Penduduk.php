<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'kd_pen';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'kd_pen',
        'no_ktp',
        'nm_pen',
        'alamat',
        'foto_pen',
        'desa',
        'kecamatan'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'kd_pen', 'kd_pen');
    }
}