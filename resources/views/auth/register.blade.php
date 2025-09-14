<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Form Registrasi</h1>
            @csrf
            <input type="text" name="name" placeholder="Nama" class="w-full border p-2 rounded">
            <input type="email" name="email" placeholder="Email" class="w-full border p-2 rounded">
            <input type="password" name="password" placeholder="Password" class="w-full border p-2 rounded">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full border p-2 rounded">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Daftar</button>
        </form>
    </div>
</body>
</html>
