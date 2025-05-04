<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;

class UploadImageToS3 implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    protected $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Baca file dari storage lokal
        $fileContent = Storage::disk('public')->get($this->filePath);

        // Simpan file ke S3
        Storage::disk('s3')->put($this->filePath, $fileContent);
    }
}
