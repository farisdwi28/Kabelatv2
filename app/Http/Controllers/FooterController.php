<?php

namespace App\Http\Controllers;

use App\Models\ProgramDispusip;
use App\Models\Komunitas;
use Illuminate\Support\Facades\View;

class FooterController extends Controller
{
    public function __construct()
    {
        // Get active programs limited to 5 items
        $programs = ProgramDispusip::where('status_program', 'aktif')
            ->take(5)
            ->get();

        // Get all active communities
        $komunitasList = Komunitas::where('status', 'aktif')
            ->take(4)
            ->get();

        // Share data with all views
        View::share('programs', $programs);  // Changed from footerPrograms to programs
        View::share('komunitasList', $komunitasList);  // Changed from footerKomunitas to komunitasList
    }
}