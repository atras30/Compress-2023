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
            $table->string('nickname');
            $table->string('nim')->unique();
            $table->string('angkatan');
            $table->string('prodi');
            $table->date('tanggallahir');
            $table->string('email')->unique();
            $table->string('noHp')->unique();
            $table->string('idLine')->unique();
            $table->string('instagram')->unique();
            $table->string('divisi1');
            $table->string('alasandiv1');
            $table->string('divisi2');
            $table->text('alasandiv2');
            $table->text('pengalaman');
            $table->text('kesibukan');
            $table->text('alasan_masuk_commpress');
            $table->text('portofolio');

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
