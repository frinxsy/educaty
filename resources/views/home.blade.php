<h1>Home</h1>
{{-- sebelum login --}}
 @guest
    <a href="/login">sign in</a>
    <a href="/register">sign up</a>
@endguest

{{-- sesudah login --}}
@auth
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth
