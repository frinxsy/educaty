<x-navbar />

<div class="bg-white max-w-6xl mx-auto mt-8 rounded-xl shadow p-10">
    @foreach ($kategori as $title)
            <h1 class="text-center text-2xl font-bold mb-10 tracking-wide">{{$title}}</h1>
    @endforeach
    <div class="prose max-w-none">
    @foreach ($videos as $video)
    <h3 class="text-center">{{ $video->judul }}</h3>
        <video class="mx-auto h-1/2 w-1/2" controls>
            <source src="{{asset('storage/'. $video->file_materi)}}" type="video/mp4">
            Browser kamu tidak mendukung tag video.
        </video>
    <br><br>
    @endforeach

    </div>
</div>

<x-footer />
