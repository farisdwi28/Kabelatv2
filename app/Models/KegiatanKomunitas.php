<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class KegiatanKomunitas extends Model
{
    protected $table = 'kegiatan_komunitas';
    protected $primaryKey = 'kd_kegiatan2';
    public $incrementing = false;
    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany(FotoKegiatan::class, 'kd_kegiatan2', 'kd_kegiatan2');
    }

    public function getMainPhotoUrl()
    {
        if ($this->photos->isNotEmpty()) {
            return $this->photos->first()->foto_path;
        }

        return $this->getRandomPlaceholderImage();
    }

    protected function getRandomPlaceholderImage()
    {
        $placeholderPath = 'public/uploads/placeholders/';
        $files = Storage::files($placeholderPath);
        
        if (empty($files)) {
            return asset('build/img/all-images/komunitas1.png');
        }

        $randomFile = $files[array_rand($files)];
        return Storage::url($randomFile);
    }
}