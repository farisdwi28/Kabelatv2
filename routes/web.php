<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ProgramDispusipController;
  
use App\Http\Controllers\Auth\LoginController;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


// Define a group of routes with 'auth' middleware applied
Route::middleware(['auth'])->group(function () {
    // Define a GET route for the root URL ('/')
    Route::get('/', function () {
        // Return a view named 'index' when accessing the root URL
        return view('index');
    }); 
    
  
    Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
    Route::get('/riwayatLaporan', [LaporanController::class, 'index'])->name('laporan.index');

    Route::get('/forumDiskusi', [DiskusiController::class, 'index'])->name('diskusi.index');
    Route::get('/forumdiskusi/{id}', [DiskusiController::class, 'show'])->name('detaildiskusi');
    Route::post('/forumdiskusi/{id}/komentar', [DiskusiController::class, 'storeComment']);
    Route::get('/tambahDiskusi/create', [DiskusiController::class, 'create']);
    Route::post('/tambahDiskusi', [DiskusiController::class, 'store'])->name('diskusi.store');

    Route::get('/programdispusip', [ProgramDispusipController::class, 'index'])->name('programdispusip.index');
    Route::get('/', [ProgramDispusipController::class, 'index1'])->name('programdispusip.home');
    Route::get('/programdispusip/{kd_program}', [ProgramDispusipController::class, 'detail'])->name('programdispusip.detail');

  
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);

  
});
