<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function berita(): View
    {
        return view('authority.berita.index', [
            'title' => 'HIMATIKOM POLSUB | Berita'
        ]);
    }
}
