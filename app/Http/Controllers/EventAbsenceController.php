<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventAbsence;
use Illuminate\Http\Request;

class EventAbsenceController extends Controller
{
    public function index()
    {
        //
    }

    public function store_absensi($uuid)
    {
        $event = Event::where('uuid', $uuid)->first();
        $event_absensi = EventAbsence::where([
            ['event_id', $event->id],
            ['user_id', auth()->user()->id]
        ])->first();
        if ($event_absensi) {
            return response()->json([
                'title' => "Absensi Program Kerja",
                'icon' => 'error',
                'text' => "Anda telah absensi pada program kerja $event->name"
            ]);
        } else {
            EventAbsence::insert([
                'uuid' => uuid_create(),
                'user_id' => auth()->user()->id,
                'event_id' => $event->id,
                'check_in' => now(),
                'created_at' => now(),
            ]);
            return response()->json([
                'title' => "Absensi Program Kerja",
                'icon' => 'success',
                'text' => "Absensi pada program kerja $event->name Berhasil!"
            ]);
        }
    }
}
