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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('nickname')->nullable();
            $table->string('nim')->unique();
            $table->string('angkatan')->nullable();
            $table->string('prodi')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('noHp')->nullable()->unique();
            $table->string('idLine')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->string('divisi1')->nullable();
            $table->string('alasandiv1')->nullable();
            $table->string('divisi2')->nullable();
            $table->string('alasandiv2')->nullable();
            $table->string('pengalaman')->nullable();
            $table->string('kesibukan')->nullable();
            $table->string('alasan-masuk-commpress')->nullable();
            $table->string('portofolio')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
