<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\ProgramDispusip;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Carbon\Carbon::setLocale('id');
        Schema::defaultStringLength(191);
        View::composer('*', function ($view) {
            $programs = ProgramDispusip::where('status_program', 'aktif')->get();
            $view->with('programs', $programs);
        });
        view()->composer('layouts.footer', function ($view) {
            $kegiatanDispusip = Kegiatan::with('photos')
                ->orderBy('tgl_mulai', 'desc')
                ->take(3)
                ->get();
    
            $view->with('kegiatanDispusip', $kegiatanDispusip);
        });
    }
}
