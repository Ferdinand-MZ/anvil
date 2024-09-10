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
            'title' => 'JTIK POLSUB',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all()
        ]);
    }

    public function profile(): View
    {
        return view('landing.profile', [
            'title' => 'JTIK POLSUB | Profile'
        ]);
    }

    public function absensi(): View
    {
        return view('landing.absensi', [
            'title' => 'JTIK POLSUB | Absensi Program Kerja atau Agenda'
        ]);
    }

    public function visi(): View
    {
        return view('landing.tentangJTIK.Visi.index', [
            'title' => 'JTIK POLSUB | Visi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function misi(): View
    {
        return view('landing.tentangJTIK.Misi.index', [
            'title' => 'JTIK POLSUB | Misi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function tujuan(): View
    {
        return view('landing.tentangJTIK.Tujuan.index', [
            'title' => 'JTIK POLSUB | Tujuan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function riwayatSingkat(): View
    {
        return view('landing.tentangJTIK.riwayatSingkat.index', [
            'title' => 'JTIK POLSUB | Riwayat Singkat',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
}
