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
        Schema::create('talkshows', function (Blueprint $table) {
            $table->id();
            $table->text('namalengkap');
            $table->text('universitas');
            $table->string('nim')->unique();
            $table->text('prodi');
            $table->string('email')->unique();
            $table->string('medsos')->unique();
            $table->string('asal')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talkshows');
    }
};
