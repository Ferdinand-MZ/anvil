<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.index', [
            'title' => 'HIMATIKOM POLSUB | Login'
        ]);
    }

    public function credentials(Request $request)
    {
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $route = '';
            if (auth()->user()->status == 'pengurus') {
                $route = 'dashboard';
            } else {
                $route = 'landing';
            }

            return redirect()->route($route)->with([
                'title' => 'Login Berhasil',
                'icon' => 'success',
                'text' => 'Selamat datang di HIMATIKOM POLSUB!'
            ]);
        } else {
            return redirect()->route('login')->with([
                'title' => 'Check Login',
                'icon' => 'error',
                'text' => 'NIM atau Password yang diinputkan salah!, harap cek kembali.'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login')->with([
            'title' => 'Meninggalkan Sesi',
            'icon' => 'success',
            'text' => 'Berhasil meninggalkan sesi, login kembali untuk memulai sesi'
        ]);
    }
}
