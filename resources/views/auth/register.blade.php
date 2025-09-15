<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Registrasi</title>
<!-- Tailwind CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(180deg, #1e3a8a 0%, #3b82f6 50%, #93c5fd 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }
    .wave {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 220px;
        z-index: 0;
    }
</style>
</head>
<body class="flex items-center justify-center">

    <!-- wave kanan atas -->
    <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#1e40af" fill-opacity="1"
    d="M0,64L60,69.3C120,75,240,85,360,117.3C480,149,600,203,720,229.3C840,256,960,256,1080,224C1200,192,1320,128,1380,96L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
    </path>
    </svg>

    <div class="relative max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 items-center px-6 z-10">

    <!-- Bagian Kiri -->
    <div class="text-white flex flex-col items-center md:items-start space-y-6">
    <div class="flex items-center space-x-2">
        <img src="logo.png" alt="Logo" class="w-12 h-12">
        <h1 class="text-2xl font-bold">Educaty</h1>
    </div>
    <p class="text-lg md:text-xl font-medium">Educaty, teman setia raih prestasi!</p>
    <img src="ilustrasi.png" alt="Ilustrasi Belajar" class="max-w-xs md:max-w-md">
    </div>

    <!-- Bagian Kanan -->
    <div class="mt-8 md:mt-0 flex justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
        <h2 class="text-center font-semibold mb-6">
        Yuk, daftar sekarang <br> GRATIS!
        </h2>

        <!-- form register -->
        <form action="{{ url('/register') }}" method="POST" class="space-y-4">
        @csrf

        <!-- tambahan label -->
        <label for="name" class="block text-gray-700 font-medium">Masukkan nama lengkap</label>
        <input type="text" id="name" name="name" placeholder="Nama Lengkap"
            class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input type="email" name="email" placeholder="Email"
            class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input type="password" name="password" placeholder="Password"
            class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
            class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button type="submit"
            class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 transition font-medium">
            Daftar
        </button>
        </form>

        <!-- link login -->
        <p class="text-center text-sm text-gray-600 mt-6">
        Sudah punya akun? <a href="/login" class="text-blue-500 hover:underline">Login</a>
        </p>
    </div>
    </div>
</div>

</body>
</html>