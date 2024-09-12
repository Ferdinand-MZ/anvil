<?php

namespace App\Http\Controllers;

use App\Models\BiroDepartment;
use App\Models\Fasilitas;
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

    public function visi_misi(): View
    {
        return view('landing.tentangJTIK.Visi-Misi.index', [
            'title' => 'JTIK POLSUB | Visi & Misi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function tujuan(): View
    {
        return view('landing.tentangJTIK.tujuan.index', [
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
    public function strukturOrganisasi(): View
    {
        return view('landing.tentangJTIK.strukturOrganisasi.index', [
            'title' => 'JTIK POLSUB | Struktur Organisasi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }

    public function fasilitas(): View
    {
        $fasilitas = Fasilitas::all();
        return view('landing.tentangJTIK.fasilitas.index', [
            'title' => 'JTIK POLSUB | Fasilitas Kami',
            'fasilitas' => $fasilitas
        ]);
    }

    public function kompetensiLulusan(): View
    {
        return view('landing.tentangJTIK.kompetensiLulusan.index', [
            'title' => 'JTIK POLSUB | Kompetensi Lulusan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function kontak(): View
    {
        return view('landing.kontak.index', [
            'title' => 'JTIK POLSUB | Kontak Kami',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function sistemInformasi(): View
    {
        return view('landing.programStudi.si_index', [
            'title' => 'JTIK POLSUB | Kontak Kami',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function teknikRPL(): View
    {
        return view('landing.programStudi.trpl_index', [
            'title' => 'JTIK POLSUB | Kontak Kami',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
}
