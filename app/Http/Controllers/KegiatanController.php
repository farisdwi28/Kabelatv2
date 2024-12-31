<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KegiatanKomunitas;
use Illuminate\Http\Request;
use App\Models\FotoKegiatan;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'dispusip'); // Default to dispusip tab
        
        $kegiatanDispusip = collect([]);
        $kegiatanKomunitas = collect([]);
        
        if ($activeTab === 'dispusip') {
            $kegiatanDispusip = Kegiatan::with('photos')
                ->orderBy('tgl_mulai', 'desc')
                ->paginate(6);
        } else {
            $kegiatanKomunitas = KegiatanKomunitas::with('photos')
                ->orderBy('tgl_mulai', 'desc')
                ->paginate(6);
        }

        return view('galerikegiatan', compact('kegiatanDispusip', 'kegiatanKomunitas', 'activeTab'));
    }

    public function detail($type, $id)
    {
        if ($type === 'dispusip') {
            $activity = Kegiatan::with('photos')->where('kd_kegiatan', $id)->firstOrFail();
        } else {
            $activity = KegiatanKomunitas::with('photos')->where('kd_kegiatan2', $id)->firstOrFail();
        }

        return view('detailkegiatan', compact('activity'));
    }
    public function photos()
{
    return $this->hasMany(FotoKegiatan::class, 'kd_kegiatan', 'kd_kegiatan');
}


}