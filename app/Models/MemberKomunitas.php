<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberKomunitas extends Model
{
    // Specify the table name
    protected $table = 'member_komunitas';

    // Disable timestamps since they're not in the table
    public $timestamps = false;

    // Primary key
    protected $primaryKey = 'kd_member';
    
    // Primary key is not auto-incrementing and is a string
    public $incrementing = false;
    protected $keyType = 'string';

    // Fillable fields from your table structure
    protected $fillable = [
        'kd_member',
        'tgl_bergabung',
        'id',
        'kd_komunitas',
        'kd_jabatan'
    ];

    // Define the date fields
    protected $dates = [
        'tgl_bergabung'
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'kd_member', 'kd_pen');
    }

    // Relationship with Komunitas model
    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class, 'kd_komunitas', 'kd_komunitas');
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'kd_member', 'kd_member');
    }

}