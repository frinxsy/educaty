<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/about', 'about');
route::view('/fasilitas', 'fasilitas');
route::view('/materi', 'materi');
