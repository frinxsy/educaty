
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <section class="relative bg-white px-8 pt-10 pb-4 max-w-5xl mx-auto rounded-2xl shadow-xl mt-8 overflow-hidden border border-gray-200 mb-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Kiri: About Us dan gambar utama -->
                <div class="flex flex-col gap-6">
                    <div>
                        <h1 class="text-5xl font-extrabold mb-4 text-blue-700 drop-shadow">About Us</h1>
                        <p class="mb-2 text-gray-700 text-lg leading-relaxed"><span class="text-yellow-500 font-semibold">Selamat datang di Educaty</span>, rumah belajar yang dirancang untuk <span class="text-blue-500">membantu</span> siswa mencapai potensi terbaiknya. Kami percaya setiap siswa memiliki cara belajar yang unik, dan tugas kami adalah menemani, membimbing, serta menginspirasi mereka untuk terus berkembang.</p>
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 w-full max-w-md pt-1">
                        <img src="/images/aboutimg1.png" alt="Belajar" class="object-cover w-full h-auto">
                    </div>
                </div>
                <!-- Kanan: gambar anak belajar, Visi, Misi -->
                <div class="flex flex-col gap-6">
                    <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 w-60 max-w-md mx-auto">
                        <img src="/images/aboutimg2.png" alt="Belajar" class="object-cover w-60 h-auto">
                    </div>
                    <div class="flex flex-col gap-8">
                        <div class="bg-white rounded-xl shadow-md p-8 border border-gray-100 hover:shadow-lg transition-shadow duration-300 w-full">
                            <h2 class="text-2xl font-extrabold mb-2 text-blue-700 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20h.01M12 4h.01" /></svg>Visi</h2>
                            <p class="text-gray-700 text-lg">Menjadi platform bimbingan belajar terpercaya yang mencetak generasi pembelajar <span class="text-yellow-500 font-semibold">cerdas, mandiri</span>, dan berkarakter.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-8 border border-gray-100 hover:shadow-lg transition-shadow duration-300 w-full">
                            <h2 class="text-2xl font-extrabold mb-2 text-blue-700 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" /></svg>Misi</h2>
                            <ul class="list-disc pl-5 text-gray-700 text-lg">
                                <li>Memberikan bimbingan belajar yang berkualitas, menyenangkan, dan <span class="text-blue-500">personal</span>, agar siswa:
                                    <ul class="list-disc pl-5">
                                        <li>Lebih percaya diri menghadapi ujian</li>
                                        <li>Memahami konsep, bukan hanya menghafal</li>
                                        <li>Mengembangkan kebiasaan belajar yang efektif</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
    <div class="absolute -top-10 -left-10 w-24 h-24 bg-yellow-400 rounded-full -z-10 opacity-70"></div>
    <div class="absolute top-10 right-0 w-16 h-16 bg-blue-500 rounded-full -z-10 opacity-70"></div>
    <div class="absolute bottom-0 left-1/4 w-10 h-10 bg-blue-400 rounded-full -z-10 opacity-70"></div>
    <div class="absolute bottom-4 right-4 w-20 h-20 bg-yellow-300 rounded-full -z-10 opacity-70"></div>
    </section>

    <!-- Footer -->
     <x-footer />
</body>
</html>
