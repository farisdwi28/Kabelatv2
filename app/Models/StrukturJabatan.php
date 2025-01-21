<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturJabatan extends Model
{
    protected $table = 'struktur_jabatan';
    protected $primaryKey = 'kd_jabatan';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'kd_jabatan',
        'nm_jabatan',
        'ket'
    ];

    // Relationship with MemberKomunitas
    public function members()
    {
        return $this->hasMany(MemberKomunitas::class, 'kd_jabatan', 'kd_jabatan');
    }

    // Method to check if the role is leadership
    public function isLeadershipRole()
    {
        return in_array($this->kd_jabatan, [
            'KETUA',  // Ketua komunitas bunda literasi
            'WAKET',  // Wakil ketua komunitas
            'KETKM',  // Ketua Komunitas
            'KET01',  // ketua kecamatan komunitas
            'KET02',  // Ketua desa komunitas
            'KET03',  // Ketua komunitas di RW
            'SEKRE',  // Sekretaris komunitas
            'SEK01',  // Sekretaris 1 komunitas
            'SEK02',  // Sekretaris 2 komunitas
            'BENDA',  // Bendahara komunitas
            'BEN01',  // Bendahara 1 komunitas
            'BEN02'   // Bendahara 2 komunitas
        ]);
    }
}
