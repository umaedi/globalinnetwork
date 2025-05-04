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
        Schema::create('fcm_tokens', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->nullable(); // Jika token dikaitkan dengan user tertentu
            $table->string('token')->unique(); // Token harus unik untuk menghindari duplikasi
            $table->enum('device_type', ['android', 'ios', 'web'])->nullable(); // Tipe perangkat
            $table->string('device_id')->nullable(); // Unik per perangkat
            $table->string('browser', 100)->nullable(); // Untuk web push, simpan browser
            $table->string('ip_address', 45)->nullable(); // Simpan IP user (IPv6 support)
            $table->boolean('is_active')->default(true); // Flag untuk status token
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fcm_tokens');
    }
};
