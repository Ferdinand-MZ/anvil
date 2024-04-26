<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Group;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function anggota(): View
    {
        return view('user.anggota.index', [
            'title' => 'HIMATIKOM POLSUB | Anggota',
            'anggotas' => User::where([
                ['status', 'anggota'],
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }

    public function pengurus(): View
    {
        return view('user.pengurus.index', [
            'title' => 'HIMATIKOM POLSUB | Anggota',
            'pengurus' => User::where([
                ['status', 'pengurus'],
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }

    public function tambah_anggota(): View
    {
        return view('user.anggota.tambah', [
            'title' => 'HIMATIKOM POLSUB | Tambah Anggota',
            'kelas' => Group::all(),
            'study_programs' => StudyProgram::all()
        ]);
    }

    public function store_anggota(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'generation' => 'required|numeric',
            'nim' => 'required|numeric',
            'study_program_id' => 'required|not_in:pilih',
            'group_id' => 'required|not_id:pilih',
        ]);
        User::insert([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->nim),
            'phone' => $request->phone,
            'generation' => $request->generation,
            'study_program_id' => $request->study_program_id,
            'group_id' => $request->group_id,
            'status' => 'anggota',
            'created_at' => now()
        ]);
        return redirect()->route('user.user-anggota')->with([
            'title' => 'Menambahkan Anggota',
            'icon' => 'success',
            'text' => 'Berhasil menambahkan data anggota',
        ]);
    }

    public function import_users(): View
    {
        return view('user.import', [
            'title' => 'HIMATIKOM POLSUB',
        ]);
    }

    public function store_import_users(Request $request)
    {
        $request->validate([
            'import_file' => 'required|max:4096',
        ]);

        $import = Excel::import(new UsersImport, $request->file('import_file'));

        if ($import) {
            return redirect()->route('user.import')->with([
                'title' => 'Mengimport Data Anggota',
                'icon' => 'success',
                'text' => 'Berhasil mengimportkan data users'
            ]);
        } else {
            return redirect()->route('user.import')->with([
                'title' => 'Mengimport Data Anggota',
                'icon' => 'error',
                'text' => 'Terdapat kesalahan dalam mengimport data users'
            ]);
        }
    }
}
