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
<header class="flex justify-between items-center px-8 py-4  shadow-sm bg-blue-500">
    <!-- logo -->
    <div class="flex items-center space-x-2">
        <img src="logo.png" alt="Logo" class="w-8 h-8">
        <span class="font-bold text-lg text-white">Educaty</span>
    </div>

    <!-- menu -->
    <nav>
    <ul class="hidden md:flex space-x-6 font-medium text-white b">
        <li><a href="/" class="hover:text-yellow-400">Home</a></li>
        <li><a href="/about" class="hover:text-yellow-400">About Us</a></li>
        <li><a href="/fasilitas" class="hover:text-yellow-400">Fasilitas</a></li>
        <li><a href="/materi" class="hover:text-yellow-400">Materi</a></li>
        <li><a href="/help" class="hover:text-yellow-400">Help</a></li>
    </ul>
    </nav>

    <!-- tombol auth -->
    @guest
    <div class="flex space-x-3">
        <a href="/login" class="px-4 py-2 rounded-full text-sm font-medium bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition">Sign in</a>
        <a href="/register" class="px-4 py-2 rounded-full text-sm font-medium bg-blue-500 text-white hover:bg-blue-600 transition">Register</a>
    </div>
    @endguest

    @auth
    <div class="flex items-center space-x-3">
        <p class="text-white">Welcome, {{ Auth::user()->name }}!</p>
        <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 rounded-full bg-red-500 text-white hover:bg-red-600 text-sm">Logout</button>
    </form>
    </div>
    @endauth
</header>

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
        <a href="#" class="px-6 py-3 bg-yellow-400 text-black rounded-full font-semibold hover:bg-yellow-500 transition">Join Now!</a>
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
            <img src="student1.jpg" alt="Student" class="rounded-full w-48 h-48 object-cover shadow-lg">
            <div class="flex space-x-4">
                <img src="student2.jpg" alt="Student" class="rounded-full w-32 h-32 object-cover shadow-lg">
                <img src="student3.jpg" alt="Student" class="rounded-full w-32 h-32 object-cover shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-600 text-white py-12 px-8 md:px-16">
    <div class="grid md:grid-cols-4 gap-8">
    <!-- Logo -->
    <div>
        <div class="flex items-center space-x-2 mb-4">
            <img src="logo.png" alt="Logo" class="w-10 h-10">
            <span class="font-bold text-lg">EDUCATY</span>
        </div>
    </div>
    <!-- Contact -->
    <div>
        <h3 class="font-semibold mb-2">Contact</h3>
        <p>Phone : +62 8123456789</p>
        <p>Email : Educaty@gmail.com</p>
    </div>
    <!-- Info -->
    <div>
        <h3 class="font-semibold mb-2">Information</h3>
        <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Press Centre</a></li>
            <li><a href="#" class="hover:underline">Our Blog</a></li>
            <li><a href="#" class="hover:underline">Term and Condition</a></li>
        </ul>
    </div>
    <!-- Menu -->
    <div>
        <h3 class="font-semibold mb-2">Menu</h3>
        <ul class="space-y-1">
            <li><a href="/about" class="hover:underline">About</a></li>
            <li><a href="#" class="hover:underline">Menu</a></li>
            <li><a href="#" class="hover:underline">Services</a></li>
        </ul>
    </div>
    </div>
</footer>

</body>
</html>
