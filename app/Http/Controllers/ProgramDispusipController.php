<?php
namespace App\Http\Controllers;

use App\Models\ProgramDispusip;
use Illuminate\Http\Request;

class ProgramDispusipController extends Controller
{
        protected $programs;

        public function __construct()
    {
        // Mengambil semua program dengan status 'aktif'
        $this->programs = ProgramDispusip::where('status_program', 'aktif')->get();
        // Membagikan data ke semua view
        view()->share('programs', $this->programs);
    }

        public function index()
        {
            // Mengambil semua program dengan status 'aktif' untuk halaman utama Program Dispusip
            $programs = ProgramDispusip::where('status_program', 'aktif')->get();
            return view('programdispusip', compact('programs'));
        }

        public function index1()
        {
            // Mengambil semua program dengan status 'aktif' untuk halaman index utama
            $programs = ProgramDispusip::where('status_program', 'aktif')->get();
            return view('index', compact('programs'));
        }

        public function detail($kd_program)
        {
            $program = ProgramDispusip::findOrFail($kd_program);
            // Mengirim data program ke view detail
            return view('detailprogramdispusip', compact('program'));
        }

        public function store(Request $request)
        {
            // Validasi input data
            $request->validate([
                'sampul_program' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Menyimpan file gambar ke folder storage
            $path = $request->file('sampul_program')->store('public/images');

            // Menyimpan informasi program ke database
            ProgramDispusip::create([
                'kd_program'       => $request->kd_program,
                'nm_program'       => $request->nm_program,
                'tanggal_dibuat'   => now(),
                'status_program'   => $request->status_program,
                'tentang_program'  => $request->tentang_program,
                'tujuan_program'   => $request->tujuan_program,
                'sampul_program'   => basename($path),  // Menyimpan nama file
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('programdispusip.index')->with('success', 'Program Dispusip berhasil ditambahkan');
        }
    }
