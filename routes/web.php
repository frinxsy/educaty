<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MateriController;

Route::get('/signup', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/about', [AuthController::class, 'about'])->name('about');
Route::get('/fasilitas', [AuthController::class, 'fasilitas'])->name('fasilitas');
Route::get('/materi', [AuthController::class, 'materi'])->name('materi');

Route::get('/materi-isi/{kategori}' ,[MateriController::class, 'index'])->name('materi_isi');


Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
