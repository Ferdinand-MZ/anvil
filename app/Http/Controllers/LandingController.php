<?php

namespace App\Http\Controllers;

use App\Models\BiroDepartment;
use App\Models\PengurusHarian;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index', [
            'title' => 'HIMATIKOM POLSUB',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all()
        ]);
    }

    public function profile(): View
    {
        return view('landing.profile', [
            'title' => 'HIMATIKOM POLSUB | Profile'
        ]);
    }

    public function absensi(): View
    {
        return view('landing.absensi', [
            'title' => 'HIMATIKOM POLSUB | Absensi Program Kerja atau Agenda'
        ]);
    }
}
