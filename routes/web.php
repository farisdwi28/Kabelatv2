<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ProgramDispusipController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [HomepageController::class, 'index'])->name('HOME');
// Public routes (accessible by everyone)
// Route::get('/', [ProgramDispusipController::class, 'index1'])->name('home');
Route::get('/programdispusip', [ProgramDispusipController::class, 'index'])->name('programdispusip.index');
Route::get('/programdispusip/{kd_program}', [ProgramDispusipController::class, 'detail'])->name('programdispusip.detail');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{kd_info}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/galeriKegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/detailKegiatan/{type}/{id}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');
Route::get('/forumDiskusi', [DiskusiController::class, 'index'])->name('diskusi.index');
Route::get('/forumdiskusi/{id}', [DiskusiController::class, 'show'])->name('diskusi.detail'); // Ubah nama route
Route::post('/komunitas/{kd_komunitas}/join', [KomunitasController::class, 'join'])->name('komunitas.join');
Route::get('/komunitas/{kd_komunitas}', [KomunitasController::class, 'detail'])->name('komunitas.detail');
// Route::get('/', [KomunitasController::class, 'index'])->name('komunitas.index');
Route::get('/galeriKomunitas', [KomunitasController::class, 'show'])->name('galeri.komunitas');
Route::get('/komunitas/{kd_komunitas?}', [KomunitasController::class, 'show'])->name('komunitas.show');
Route::get('programs/search', [ProgramDispusipController::class, 'search'])->name('programs.search');
Route::get('berita/search', [BeritaController::class, 'search'])->name('berita.search');

// Routes for guests (login and register)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/verify-nik', [RegisterController::class, 'showVerifyNikForm'])->name('verify-nik');
    Route::post('/verify-nik', [RegisterController::class, 'verifyNik']);
    Route::get('forgot-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'reset'])->name('password.reset');
    Route::post('forgot-password/verify-nik', [ForgotPasswordController::class, 'verifyNik'])->name('password.verify-nik');
    // Route::get('password/reset', [ForgotPasswordController::class, 'showResetForm'])->name('password.request');
    // Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.reset');
});

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
    Route::get('/riwayatLaporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/download/{kd_laporan}', [LaporanController::class, 'download'])->name('laporan.download');  Route::post('/berita/{kd_info}/komentar', [BeritaController::class, 'storeComment'])->name('berita.komentar');
    Route::post('/berita/{kd_info}/like', [BeritaController::class, 'like'])->name('berita.like');
    Route::post('/berita/{kd_info}/view', [BeritaController::class, 'view'])->name('berita.view');
    Route::post('/forumdiskusi/{id}/komentar', [DiskusiController::class, 'storeComment'])->name('diskusi.comment');
    Route::get('/diskusi', [DiskusiController::class, 'create'])->name('diskusi.create'); // Perbaikan pada URL
    Route::post('/diskusi/store', [DiskusiController::class, 'store'])->name('diskusi.store');
    Route::get('/join-check', [KomunitasController::class, 'checkPendingJoin'])->name('join.checkPending');
    Route::post('/komunitas/join/{kd_komunitas}', [KomunitasController::class, 'join'])
        ->name('komunitas.join')
        ->middleware('auth');
    Route::get('/strukturKomunitas/{kd_komunitas}', [KomunitasController::class, 'showStructure'])
        ->name('strukturKomunitas.show');
        // Update this route
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    });
});

// Catch-all route for dynamic pages
Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
