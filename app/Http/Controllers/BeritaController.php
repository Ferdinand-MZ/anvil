<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(): View
    {
        return view('authority.berita.index', [
            'title' => 'HIMATIKOM POLSUB | Berita',
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('authority.berita.create');
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {
        return view('authority.berita.edit');
    }

    public function update(Request $request, $id) 
    {

    }

    public function destroy($id) 
    {

    }
}
