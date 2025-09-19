<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educaty - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white">

<!-- Navbar -->
<x-navbar />

<!-- Hero Section -->
<section class="relative overflow-hidden px-8 md:px-16 py-16 grid md:grid-cols-2 items-center gap-12">
    <!-- Dekorasi Lingkaran -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-yellow-400 rounded-full -translate-x-1/2 -translate-y-1/3"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-500 rounded-full translate-x-1/3 translate-y-1/3"></div>

    <!-- Left Content -->
    <div class="space-y-6 relative z-10">
        <p class="text-blue-500 font-medium">Educaty Online Course</p>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
            Temukan kekuatan <br> belajar di ujung jari Anda.
        </h1>
        <p class="text-gray-600 leading-relaxed">
            Kursus kami yang dipandu oleh para ahli memberikan pengetahuan mendalam, memastikan Anda menguasai bidang minat Anda sambil beradaptasi dengan perkembangan dunia saat ini. Bergabunglah dengan komunitas pembelajaran dan mentor yang berdedikasi.
        </p>
    <div class="flex space-x-4">
        <a href="/joinnow" class="px-6 py-3 bg-yellow-400 text-black rounded-full font-semibold hover:bg-yellow-500 transition">Join Now!</a>
        <a href="#" class="flex items-center space-x-2 text-blue-600 font-medium hover:underline">
        <span>Learn More</span>
        </a>
    </div>
    </div>

    <!-- Right Content -->
    <div class="relative flex justify-center items-center z-10">
    <!-- lingkaran background -->
        <div class="absolute top-10 right-0 w-56 h-56 bg-yellow-400 rounded-full -z-10"></div>
        <div class="absolute bottom-0 left-5 w-40 h-40 bg-blue-600 rounded-full -z-10"></div>

        <!-- foto -->
        <div class="flex flex-col space-y-4 items-center">
            <img src="/images/rectangle 6.png" alt="Student" class="rounded-full w-48 h-48 object-cover shadow-lg">
            <div class="flex space-x-4">
                <img src="/images/rectangle 4.png" alt="Student" class="rounded-full w-32 h-32 object-cover shadow-lg">
                <img src="/images/rectangle 5.png" alt="Student" class="rounded-full w-32 h-32 object-cover shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<x-footer />

</body>
</html>
