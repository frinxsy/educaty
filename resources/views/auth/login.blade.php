<form action="{{ url('/login') }}" method="POST" class="space-y-4">
    @csrf
    <input type="email" name="email" placeholder="Email" class="w-full border p-2 rounded">
    <input type="password" name="password" placeholder="Password" class="w-full border p-2 rounded">
    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
    <a href="/register">daftar</a>
</form>
