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
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('title')->nullable(true);
            $table->string('nama_pembuat')->nullable(true);
            $table->text('link')->nullable(true);
            $table->string('tipe'); 
            $table->text('deskripsi')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arts');
    }
};
