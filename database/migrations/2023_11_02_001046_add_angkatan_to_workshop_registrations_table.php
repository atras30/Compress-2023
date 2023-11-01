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
        Schema::table('workshop_registrations', function (Blueprint $table) {
            $table->string('angkatan')->after('major')->nullable(true);
            $table->string('asal-universitas')->after('full_name');
            $table->string('nim')->nullable(true)->change();
            $table->string('major')->nullable(true)->change();
            $table->string('email', 512)->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workshop_registrations', function (Blueprint $table) {
            $table->dropColumn('angkatan');
            $table->dropColumn('asal-universitas');
            $table->string('nim')->nullable(false)->change();
            $table->string('major')->nullable(false)->change();
            $table->string('email', 512)->nullable(false)->change();
        });
    }
};
