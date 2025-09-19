<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,avi,flv|max:20480', // max 20MB
            'kategori' => 'required|string|max:255'
        ]);

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', 'public');
            // simpan ke storage/app/public/videos

            Materi::create([
                'judul' => $request->judul,
                'file_materi' => $path,
                'kategori' => $request->kategori,
            ]);
        }

        return redirect()->back()->with('success', 'Video berhasil diupload!');
    }

    public function index($kategori)
    {
        $videos = Materi::where('kategori', $kategori)->get();
        return view('materi_isi', [
            'videos' => $videos,
            'kategori' => [$kategori], // kirim sebagai array agar bisa di-foreach
        ]);
    }

    public function show()
    {
        $video = Materi::all();
        return view('uploadvideotest', compact('video'));
    }

}
