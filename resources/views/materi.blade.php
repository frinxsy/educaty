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
    <h1 class="text-center text-2xl font-bold mb-10 tracking-wide">Materi</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col items-center">
            <img src="/images/matematika.png" alt="Matematika" class="w-full max-w-md rounded-t-xl">
            <div class="bg-gray-700 w-full py-2 rounded-b-xl text-center">
                <span class="text-white font-bold text-lg tracking-wide">MATEMATIKA</span>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <img src="/images/bing.png" alt="B.Inggris" class="w-full max-w-md rounded-t-xl">
            <div class="bg-gray-700 w-full py-2 rounded-b-xl text-center">
                <span class="text-white font-bold text-lg tracking-wide">B.INGGRIS</span>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <img src="/images/bindo.png" alt="B.Indonesia" class="w-full max-w-md rounded-t-xl">
            <div class="bg-gray-700 w-full py-2 rounded-b-xl text-center">
                <span class="text-white font-bold text-lg tracking-wide">B.INDONESIA</span>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <img src="/images/rpl.png" alt="Rekayasa Perangkat Lunak" class="w-full max-w-md rounded-t-xl">
            <div class="bg-gray-700 w-full py-2 rounded-b-xl text-center">
                <span class="text-white font-bold text-lg tracking-wide">REKAYASA PERANGKAT LUNAK</span>
            </div>
        </div>
    </div>
</div>

<x-footer />
</body>
</html>