<?php

namespace App\Http\Controllers;

use App\Models\ProgramDispusip;
use App\Models\Berita;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // Mengambil data Program Dispusip untuk carousel dengan status 'aktif'
        $carouselPrograms = ProgramDispusip::where('status_program', 'aktif')
            ->whereNotNull('sampul_program') // Memastikan program memiliki gambar
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        // Mengambil data Program Dispusip dengan status 'aktif'
        $programs = ProgramDispusip::where('status_program', 'aktif')
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        // Mengambil berita terbaru dengan status 'terbit'
        $News = Berita::where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        // Mengambil data komunitas tanpa sorting berdasarkan created_at
        $komunitasList = Komunitas::take(5)->get();

        // Mengembalikan data ke view homepage
        return view('index', compact('carouselPrograms','programs', 'News', 'komunitasList'));
    }
}
