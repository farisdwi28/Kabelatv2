<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'kd_lokal',
        'kd_pen',
        'role',
        'foto_pen',
        'id',
        'kd_komunitas'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $attributes = [
        'role' => 'user'
    ];

    // Allow login with username or email
    public function findForPassport($username)
    {
        return $this->where('username', $username)
            ->orWhere('email', $username)
            ->first();
    }
    public function diskusi()
    {
        return $this->hasMany(Diskusi::class, 'id', 'id');
    }

    public function komentarDiskusi()
    {
        return $this->hasMany(KomentarDiskusi::class, 'id', 'id');
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'kd_pen', 'kd_pen');
    }
    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class, 'kd_komunitas', 'kd_komunitas');
    }

    // Model User
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'kd_member');
    }
    public function memberKomunitas()
    {
        return $this->hasOne(MemberKomunitas::class, 'id', 'id');
    }
}
