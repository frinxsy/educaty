
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

Route::get('/', function () {
    return view('home');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/materi', function () {
    return view('materi');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/visi_misi', function () {
    return view('visi_misi');
});
