<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function thumbnail($type, $year, $filename)
    {
        // Cegah akses file berbahaya
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            abort(404);
        }

        // Path file di MinIO
        $path = "berita/thumbnail/{$type}/{$year}/{$filename}";

        // Periksa apakah file ada di MinIO
        if (!Storage::exists($path)) {
            // abort(404);
            $path = public_path('assets/img/thumbnail.jpg');
            return response()->file($path);
        }

        // Dapatkan MIME type
        $mimeType = Storage::mimeType($path);

        // Stream file
        return response()->stream(function () use ($path) {
            $stream = Storage::readStream($path);
            while (!feof($stream)) {
                echo fread($stream, 1024 * 8); // Membaca file dalam blok 8 KB
            }
            fclose($stream);
        }, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
        ]);
    }

    public function konten($filename) 
    {
        // Cegah akses file berbahaya
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            abort(404);
        }

        // Path file di MinIO
        $path = "berita/konten/{$filename}";

        // Periksa apakah file ada di MinIO
        if (!Storage::exists($path)) {
            abort(404);
        }

        // Dapatkan MIME type
        $mimeType = Storage::mimeType($path);

        // Stream file
        return response()->stream(function () use ($path) {
            $stream = Storage::readStream($path);
            while (!feof($stream)) {
                echo fread($stream, 1024 * 8); // Membaca file dalam blok 8 KB
            }
            fclose($stream);
        }, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
        ]);
    }

    public function photoPimpinan($filename)
    {
        // Cegah akses file berbahaya
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            abort(404);
        }

        // Path file di MinIO
        $path = "images/kepala-opd/{$filename}";

        // Periksa apakah file ada di MinIO
        if (!Storage::exists($path)) {
            abort(404);
        }

        // Dapatkan MIME type
        $mimeType = Storage::mimeType($path);

        // Stream file
        return response()->stream(function () use ($path) {
            $stream = Storage::readStream($path);
            while (!feof($stream)) {
                echo fread($stream, 1024 * 8); // Membaca file dalam blok 8 KB
            }
            fclose($stream);
        }, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
        ]);
    }
}
