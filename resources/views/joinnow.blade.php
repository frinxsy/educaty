@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-blue-100 via-white to-yellow-100 py-8">
    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-lg w-full border border-blue-100">
        <h1 class="text-4xl font-extrabold mb-2 text-blue-700 text-center tracking-tight">Daftar Murid Educaty</h1>
        <p class="mb-6 text-gray-600 text-center">Isi data diri kamu untuk bergabung sebagai murid di Educaty!</p>
    <form id="joinForm" action="{{route('register')}}" method="POST" class="space-y-5">
        @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Nama Lengkap" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Tanggal Lahir</label>
                    <input type="date" name="#" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Jenis Kelamin</label>
                    <select name="#" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Sekolah</label>
                    <input type="text" name="#" placeholder="Nama Sekolah" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Password</label>
                    <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-yellow-400 text-white py-3 rounded-lg font-bold text-lg shadow hover:from-blue-600 hover:to-yellow-500 transition">Daftar Sekarang</button>
        </form>
        {{-- <script>
        document.getElementById('joinForm').addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = '/berhasil-daftar';
        });
        </script> --}}
    </div>
</div>
@endsection
