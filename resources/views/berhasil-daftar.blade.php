@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-blue-100 via-white to-yellow-100 py-8">
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-lg w-full border border-blue-100 text-center">
        <svg class="mx-auto mb-4 w-16 h-16 text-green-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z"/></svg>
        <h1 class="text-3xl font-bold mb-2 text-green-600">Selamat!</h1>
        <p class="mb-6 text-gray-700">Kamu telah terdaftar menjadi murid Educaty.<br>Silahkan login untuk menikmati fasilitas Educaty</p>
        <a href="/login" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-yellow-400 text-white rounded-lg font-bold text-lg shadow hover:from-blue-600 hover:to-yellow-500 transition">Login</a>
    </div>
</div>
@endsection
