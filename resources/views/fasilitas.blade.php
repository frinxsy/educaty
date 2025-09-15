<<<<<<< HEAD
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

<div class="bg-white max-w-6xl mx-auto mt-8 rounded-xl shadow p-10">
    <h1 class="text-center text-2xl font-bold mb-10 tracking-wide">FASILITAS</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div class="flex gap-4 items-start">
            <img src="/images/forum.png" alt="Forum" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Forum Diskusi</h2>
                <p class="text-sm text-gray-700">Tempat tanya jawab antara siswa dan pengajar, grup topik sesuai mata pelajaran.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start">
            <img src="/images/quiz.png" alt="Quiz" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Quiz & ujian online</h2>
                <p class="text-sm text-gray-700">Latihan soal dengan hasil otomatis, sistem ranking dan sertifikat.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start">
            <img src="/images/perpus.png" alt="Library" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Perpustakaan digital</h2>
                <p class="text-sm text-gray-700">Koleksi e-book, jurnal, dan artikel fitur pencarian cepat berdasarkan kategori.</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="flex gap-4 items-start">
            <img src="/images/kelas online.png" alt="Online" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Kelas online</h2>
                <p class="text-sm text-gray-700">Video pembelajaran, audio, dan materi bacaan. Live class melalui Zoom atau Google Meet.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start">
            <img src="/images/notifikasi.png" alt="Notif" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Notifikasi</h2>
                <p class="text-sm text-gray-700">Jadwal kelas, deadline tugas, dan pengumuman penting.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start">
            <img src="/images/berita.png" alt="News" class="h-14 w-14">
            <div>
                <h2 class="font-bold text-lg mb-1">Berita dan artikel</h2>
                <p class="text-sm text-gray-700">Daftar kegiatan seputar sekolah, artikel edukasi.</p>
            </div>
        </div>
    </div>
</div>

<x-footer />
</body>
</html>
=======
<h1>fasilitas</h1>
{{-- sebelum login --}}
 @guest
    <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/visi_misi">Visi Misi</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/fasilitas">Fasilitas</a></li>
        <li><a href="/materi">Materi</a></li>
    </ol>

    <a href="/login">sign in</a>
    <a href="/register">sign up</a>
@endguest

{{-- sesudah login --}}
@auth
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/visi_misi">Visi Misi</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/fasilitas">Fasilitas</a></li>
        <li><a href="/materi">Materi</a></li>
    </ol>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth

>>>>>>> bf0abbafefcf76abbce024c90018c92f55e741b4
