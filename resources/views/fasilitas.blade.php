<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <x-navbar />


<div class="relative w-full bg-gradient-to-br from-blue-50 via-white to-yellow-50 overflow-hidden">
    <!-- Dekorasi lingkaran background -->
    <div class="pointer-events-none pb-10 px-10">
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-yellow-200 rounded-full opacity-60 -z-10"></div>
    <h1 class="text-center text-4xl md:text-5xl font-extrabold mb-4 text-blue-700 tracking-tight drop-shadow">Fasilitas Educaty</h1>
    <p class="text-center text-lg text-gray-600 mb-12 max-w-2xl mx-auto">Berbagai fitur modern untuk mendukung proses belajar kamu, mulai dari forum diskusi, quiz online, hingga perpustakaan digital dan kelas interaktif.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-blue-400">
            <img src="/images/forum.png" alt="Forum" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-blue-700">Forum Diskusi</h2>
            <p class="text-gray-600 text-center">Tempat tanya jawab antara siswa dan pengajar, grup topik sesuai mata pelajaran.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-yellow-400">
            <img src="/images/quiz.png" alt="Quiz" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-yellow-500">Quiz & Ujian Online</h2>
            <p class="text-gray-600 text-center">Latihan soal dengan hasil otomatis, sistem ranking dan sertifikat.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-blue-300">
            <img src="/images/perpus.png" alt="Library" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-blue-400">Perpustakaan Digital</h2>
            <p class="text-gray-600 text-center">Koleksi e-book, jurnal, dan artikel fitur pencarian cepat berdasarkan kategori.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-yellow-300">
            <img src="/images/kelas online.png" alt="Online" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-yellow-400">Kelas Online</h2>
            <p class="text-gray-600 text-center">Video pembelajaran, audio, dan materi bacaan. Live class melalui Zoom atau Google Meet.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-blue-500">
            <img src="/images/notifikasi.png" alt="Notif" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-blue-600">Notifikasi</h2>
            <p class="text-gray-600 text-center">Jadwal kelas, deadline tugas, dan pengumuman penting.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 border-t-4 border-yellow-500">
            <img src="/images/berita.png" alt="News" class="h-20 w-20 mb-4">
            <h2 class="font-bold text-xl mb-2 text-yellow-500">Berita & Artikel</h2>
            <p class="text-gray-600 text-center">Daftar kegiatan seputar sekolah, artikel edukasi.</p>
        </div>
    </div>
</div>

<x-footer />
</body>
</html>