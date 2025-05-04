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
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->string('subdomain')->unique();
            $table->string('nama_opd');
            $table->string('nama_kepala_opd');
            $table->string('jabatan')->default('-');
            $table->text('sambutan_kepala_opd')->nullable();
            $table->string('alamat')->default('-');
            $table->string('no_tlp')->default('-');
            $table->string('email')->default('-');
            $table->string('maps')->default('-');
            $table->string('instagram')->default('-');
            $table->string('youtube')->default('-');
            $table->string('facebook')->default('-');
            $table->string('photo_kepala_opd')->default('photo_kepala_opd_default.png');
            $table->string('token_ig')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};