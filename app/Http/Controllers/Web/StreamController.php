<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StreamController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($path, $filename)
    {
        {
            // Cegah akses file berbahaya
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                abort(404);
            }
    
            // Path file di MinIO
            $path = str_replace('|', '/', $path) . '/' . $filename;
    
            // Periksa apakah file ada di MinIO
            if (!Storage::exists($path)) {
                // abort(404);
                $path = public_path('assets/img/thumbnail.png');
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
    }
}
