<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // tampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // proses registrasi
    public function register(Request $request)
    {
        // validasi input
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // simpan user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // redirect dengan pesan sukses
        return redirect()->route('register')->with('success', 'Akun berhasil dibuat!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function about()
    {
        return view('about');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function materi()
    {
        return view('materi');
    }
}

