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
        Schema::table('talkshows', function (Blueprint $table) {
            $table->string('angkatan')->after('prodi')->nullable(true);
            $table->dropColumn('asal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('talkshows', function (Blueprint $table) {
            $table->dropColumn('angkatan');
            $table->text('asal')->unique(false)->change();
        });
    }
};
