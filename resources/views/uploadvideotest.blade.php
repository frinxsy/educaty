@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Judul:</label>
    <input type="text" name="judul"><br><br>

    <label>Kategori:</label>
    <input type="text" name="kategori"><br><br>

    <label>Pilih Video:</label>
    <input type="file" name="video"><br><br>

    <button type="submit">Upload</button>
</form>
