<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subberitas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('post_id');
            $table->uuid('user_id');
            $table->foreignId('category_id');
            $table->string('subdomain');
            $table->text('judul');
            $table->text('excrept');
            $table->text('slug');
            $table->text('body');
            $table->string('thumbnail')->default('thumbnail.jpg');
            $table->text('caption_thumbnail')->nullable();
            $table->enum('status', ['draft', 'publish'])->default('draft');
            $table->integer('views')->default(0);
            $table->enum('pin', ['ekslusif', 'pilihan_editor', 'berita_terbaru'])->default('berita_terbaru');
            $table->timestamp('tanggal_publish')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subberitas');
    }
};
