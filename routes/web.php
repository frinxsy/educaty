<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/about', [AuthController::class, 'about'])->name('about');
Route::get('/fasilitas', [AuthController::class, 'fasilitas'])->name('fasilitas');
Route::get('/materi', [AuthController::class, 'materi'])->name('materi');