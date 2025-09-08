<h1>materi</h1>
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

