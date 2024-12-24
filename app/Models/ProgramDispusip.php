<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDispusip extends Model
{
    use HasFactory;

    protected $table = 'program'; // Mengacu ke tabel `program`
    protected $primaryKey = 'kd_program';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = [
        'kd_program',
        'nm_program',
        'tanggal_dibuat',
        'status_program',
        'tentang_program',
        'tujuan_program',
        'sampul_program',
    ];
}
