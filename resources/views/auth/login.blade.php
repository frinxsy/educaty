@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-blue-100 via-white to-yellow-100 py-8">
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-lg w-full border border-blue-100">
        <h1 class="text-4xl font-extrabold mb-2 text-blue-700 text-center tracking-tight">Login</h1>
        <p class="mb-6 text-gray-600 text-center">Masuk untuk mengakses materi dan fitur Educaty!</p>
        <form id="loginForm" action="{{route('login')}}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-yellow-400 text-white py-3 rounded-lg font-bold text-lg shadow hover:from-blue-600 hover:to-yellow-500 transition">Login</button>
        </form>
    </div>
</div>
@endsection