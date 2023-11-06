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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->text('namalengkap');
            $table->text('universitas');
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->string('medsos')->unique();
            $table->text('bukti');
            $table->string('instagram')->unique()->nullable();
            $table->text('linkkaryaig')->nullable();
            $table->text('pathfilehasilkarya')->nullable();
            $table->enum('type', ['Mobile Journalism', 'Long-Form Article', 'News Infographic']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
