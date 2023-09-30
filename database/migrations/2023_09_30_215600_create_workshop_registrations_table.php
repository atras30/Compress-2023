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
        Schema::create('workshop_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('nim');
            $table->string('major');
            $table->string('email', 512);
            $table->string("line_id_or_whatsapp_number");
            $table->string("know_commpress_from", 1024);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_registrations');
    }
};
