<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'kd_kegiatan';
    public $incrementing = false;
    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany(FotoKegiatan::class, 'kd_kegiatan', 'kd_kegiatan');
    }

    public function getMainPhotoUrl()
    {
        // Check if there are any photos
        if ($this->photos->isNotEmpty()) {
            return $this->photos->first()->foto_path;
        }

        // Return a random image from the placeholder folder
        return $this->getRandomPlaceholderImage();
    }

    protected function getRandomPlaceholderImage()
    {
        $placeholderPath = 'public/uploads/placeholders/';
        $files = Storage::files($placeholderPath);
        
        if (empty($files)) {
            return asset('build/img/all-images/contoh4.png');
        }

        $randomFile = $files[array_rand($files)];
        return Storage::url($randomFile);
    }
}