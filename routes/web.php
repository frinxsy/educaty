<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/about', [AuthController::class, 'about'])->name('about');
Route::get('/fasilitas', [AuthController::class, 'fasilitas'])->name('fasilitas');
Route::get('/materi', [AuthController::class, 'materi'])->name('materi');

Route::get('/materi-isi',function () {
    return view('materi_isi');
});
