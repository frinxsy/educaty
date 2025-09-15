<nav class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 text-white px-8 py-3 flex items-center justify-between shadow-lg sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <img src="/images/logo.png" alt="Educaty Logo" class="h-10 w-10 mr-2 drop-shadow-lg">
            <span class="font-extrabold text-xl tracking-wide">Educaty</span>
        </div>
        <ul class="flex gap-6 items-center">
            <li>
                <a href="/" class="transition-colors duration-200 font-medium {{ Request::is('/') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">Home</a>
            </li>
            <li>
                <a href="/about" class="transition-colors duration-200 font-medium {{ Request::is('about') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">About Us</a>
            </li>
            <li>
                <a href="/fasilitas" class="transition-colors duration-200 font-medium {{ Request::is('fasilitas') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">Fasilitas</a>
            </li>
            <li>
                <a href="/materi" class="transition-colors duration-200 font-medium {{ Request::is('materi') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">Materi</a>
            </li>
            <li>
                <a href="/help" class="transition-colors duration-200 font-medium {{ Request::is('help') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">Help</a>
            </li>
            <li>
                <a href="/signup" class="transition-colors duration-200 font-medium {{ Request::is('signup') ? 'underline underline-offset-4 text-yellow-400' : 'text-white hover:text-yellow-400' }}">Sign up</a>
            </li>
            <li>
                <a href="/register" class="bg-blue-500 px-4 py-1 rounded-full text-white font-semibold shadow hover:bg-yellow-400 hover:text-blue-700 transition-colors duration-200 {{ Request::is('register') ? 'underline underline-offset-4' : '' }}">Register</a>
            </li>
        </ul>
    </nav>