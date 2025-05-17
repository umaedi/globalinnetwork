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
    
            $fullPathFile = $path . '/' . $filename;
            // Path file di MinIO
            $pathFile = str_replace('|', '/', $fullPathFile);
    
            // Periksa apakah file ada di MinIO
            if (!Storage::exists($pathFile)) {
                // abort(404);
                $pathFile = public_path('assets/img/thumbnail.png');
                return response()->file($pathFile);
            }
    
            // Dapatkan MIME type
            $mimeType = Storage::mimeType($pathFile);
    
            // Stream file
            return response()->stream(function () use ($pathFile) {
                $stream = Storage::readStream($pathFile);
                while (!feof($stream)) {
                    echo fread($stream, 1024 * 8); // Membaca file dalam blok 8 KB
                }
                fclose($stream);
            }, 200, [
                'Content-Type' => $mimeType,
                'Content-Disposition' => 'inline; filename="' . basename($pathFile) . '"',
            ]);
        }
    }
}
