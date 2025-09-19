<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educaty - Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<x-navbar />


<div class="relative w-full min-h-screen pt-20 pb-16 px-4 bg-gradient-to-br from-blue-50 via-white to-yellow-50 overflow-hidden">
    <!-- Dekorasi lingkaran background -->
    <div class="pointer-events-none">
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-yellow-200 rounded-full opacity-60 -z-10"></div>
    </div>
    <h1 class="text-center text-4xl md:text-5xl font-extrabold mb-4 text-blue-700 tracking-tight drop-shadow">Materi Pembelajaran</h1>
    <p class="text-center text-lg text-gray-600 mb-12 max-w-2xl mx-auto">Pilih kategori materi yang ingin kamu pelajari. Semua materi disusun interaktif dan mudah dipahami.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-blue-400">
            <img src="/images/matematika.png" alt="Matematika" class="w-full max-w-xs rounded-xl mb-4">
            <a href="{{route('materi_isi', ['kategori' => 'Matematika'])}}" class="block w-full">
                <span class="block bg-gradient-to-r from-blue-500 to-yellow-400 text-white font-bold text-lg tracking-wide py-2 rounded-lg text-center shadow hover:from-blue-600 hover:to-yellow-500 transition">MATEMATIKA</span>
            </a>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-yellow-400">
            <img src="/images/bing.png" alt="B.Inggris" class="w-full max-w-xs rounded-xl mb-4">
            <a href="{{route('materi_isi', ['kategori' => 'B.Inggris'])}}" class="block w-full">
                <span class="block bg-gradient-to-r from-yellow-400 to-blue-400 text-white font-bold text-lg tracking-wide py-2 rounded-lg text-center shadow hover:from-yellow-500 hover:to-blue-500 transition">B.INGGRIS</span>
            </a>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-blue-300">
            <img src="/images/bindo.png" alt="B.Indonesia" class="w-full max-w-xs rounded-xl mb-4">
            <a href="{{route('materi_isi', ['kategori' => 'B.Indonesia'])}}" class="block w-full">
                <span class="block bg-gradient-to-r from-blue-400 to-yellow-300 text-white font-bold text-lg tracking-wide py-2 rounded-lg text-center shadow hover:from-blue-500 hover:to-yellow-400 transition">B.INDONESIA</span>
            </a>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-yellow-500">
            <img src="/images/rpl.png" alt="Rekayasa Perangkat Lunak" class="w-full max-w-xs rounded-xl mb-4">
            <a href="{{route('materi_isi', ['kategori' => 'RPL'])}}" class="block w-full">
                <span class="block bg-gradient-to-r from-yellow-400 to-blue-500 text-white font-bold text-lg tracking-wide py-2 rounded-lg text-center shadow hover:from-yellow-500 hover:to-blue-600 transition">REKAYASA PERANGKAT LUNAK</span>
            </a>
        </div>
    </div>
</div>

<x-footer />
</body>
</html>

