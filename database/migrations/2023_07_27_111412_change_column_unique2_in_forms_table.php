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
        Schema::table('forms', function (Blueprint $table) {
            $table->text('nim')->unique(false)->change();
            $table->text('email')->unique(false)->change();
            $table->text('medsos')->unique(false)->change();
            $table->text('instagram')->unique(false)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->text('nim')->unique(true)->change();
            $table->text('email')->unique(true)->change();
            $table->text('medsos')->unique(true)->change();
            $table->text('instagram')->unique(true)->nullable()->change();
        });
    }
};
