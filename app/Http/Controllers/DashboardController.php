<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Organization;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index', [
            'title' => 'HIMATIKOM POLSUB | Dashboard'
        ]);
    }

    public function profile(): View
    {
        return view('user.profile', [
            'title' => 'HIMATIKOM POLSUB | Kelola Akun'
        ]);
    }

    public function absensi(): View
    {
        return view('user.absensi', [
            'title' => 'HIMATIKOM POLSUB | Absensi Program Kerja / Agenda'
        ]);
    }

    public function change_profile(): View
    {
        return view('user.change-profile', [
            'title' => 'HIMATIKOM POLSUB | Ubah Profile',
            'kelas' => Group::all(),
            'study_programs' => StudyProgram::all(),
            'organizations' => Organization::all()
        ]);
    }

    public function change_password(): View
    {
        return view('user.change-password', [
            'title' => 'HIMATIKOM POLSUB | Ubah Password'
        ]);
    }

    public function change_profile_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'generation' => 'required|numeric',
            'study_program_id' => 'required|not_in:pilih',
            'group_id' => 'required|not_in:pilih',
        ]);
        User::where('uuid', auth()->user()->uuid)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->nim),
            'phone' => $request->phone,
            'generation' => $request->generation,
            'study_program_id' => $request->study_program_id,
            'group_id' => $request->group_id,
            'updated_at' => now()
        ]);
        return redirect()->route('profile')->with([
            'title' => 'Mengubah Profile',
            'icon' => 'success',
            'text' => 'Berhasil mengubah biodata anda!'
        ]);
    }

    public function change_password_store(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:4',
            'repeat_password' => 'required|same:new_password'
        ]);
        if (Hash::check($request->old_password, auth()->user()->password)) {
            User::where('uuid', auth()->user()->uuid)->update([
                'password' => Hash::make('new_password')
            ]);
            return redirect()->route('profile')->with([
                'title' => 'Mengubah Password',
                'icon' => 'success',
                'text' => 'Berhasil mengubah password lama anda!'
            ]);
        } else {
            return redirect()->route('profile.change-password')->with([
                'title' => 'Mengubah Password',
                'icon' => 'error',
                'text' => 'Password lama yang diinputkan tidak sama!'
            ]);
        }
    }
}
