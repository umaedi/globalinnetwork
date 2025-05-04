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
        Schema::create('halaman', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('subdomain');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('konten');
            $table->date('publish_at');
            $table->enum('status', ['publish', 'draft']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman');
    }
};
