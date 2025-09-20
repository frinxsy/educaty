<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // tampilkan form registrasi
    public function showRegisterForm()
    {
        return view('joinnow');
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
        return redirect()->route('berhasil-daftar')->with('success', 'Akun berhasil dibuat!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil logout!');
    }

    public function home()
    {
        return view('home', ['page' => 'Home']);
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

    public function joinnow()
    {
        return view('joinnow');
    }

    public function berhasildaftar()
    {
        return view('berhasildaftar');
    }
}


