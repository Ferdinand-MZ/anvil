<?php

namespace App\Http\Controllers;

use App\Models\BiroDepartment;
use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function agenda(): View
    {
        return view('proker-agenda.agenda.index', [
            'title' => 'HIMATIKOM POLSUB | Agenda'
        ]);
    }

    public function proker(): View
    {
        return view('proker-agenda.proker.index', [
            'title' => 'HIMATIKOM POLSUB | Program Kerja',
            'prokers' => Event::where([
                ['deleted_at', null],
                ['type', 'acara']
            ])->get()->all()
        ]);
    }

    public function detail($uuid): View
    {
        return view('proker-agenda.proker.detail', [
            'title' => 'HIMATIKOM POLSUB | Detil Program Kerja',
            'proker' => Event::where('uuid', $uuid)->first()
        ]);
    }

    public function tambah_proker(): View
    {
        return view('proker-agenda.proker.tambah', [
            'title' => 'HIMATIKOM POLSUB | Tambah Program Kerja',
            'biro_departments' => BiroDepartment::all(),
        ]);
    }

    public function store_proker(Request $request)
    {
        $request->validate([
            'biro_department_id' => 'required|not_in:pilih',
            'name' => 'required',
        ]);

        Event::insert([
            'uuid' => uuid_create(),
            'user_id' => auth()->user()->id,
            'biro_department_id' => $request->biro_department_id,
            'name' => $request->name,
            'type' => 'acara',
            'event_day' => $request->event_day ?? null,
        ]);

        return redirect()->route('proker-agenda.proker')->with([
            'title' => 'Menambahkan Program Kerja',
            'icon' => 'success',
            'text' => 'Berhasil menambahkan program kerja baru'
        ]);
    }
}
