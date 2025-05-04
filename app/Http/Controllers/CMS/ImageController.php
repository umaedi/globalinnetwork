<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function upload(Request $request)
    {
        // Validasi file gambar
        $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Max 2MB
        ],[
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Hanya format jpeg, png, dan jpg yang diperbolehkan.',
            'image.max' => 'Ukuran gambar maksimal adalah 2MB.',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('berita/konten/', 'public');
            $url = Storage::url($path);
            return response()->json(['url' => $url]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function delete(Request $request)
    {
        // Path file di MinIO
        $path = "berita/konten/".basename($request->image);

        // Periksa apakah file ada di MinIO
        if (!Storage::exists($path)) {
            return response()->json(['message' => 'File not found'], 404);
        }

        // Hapus file
        Storage::delete($path);

        // Return response sukses
        return response()->json(['message' => 'File deleted successfully'], 200);
    }
}
