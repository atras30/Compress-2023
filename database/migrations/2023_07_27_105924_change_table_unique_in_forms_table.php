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
            $table->string('nim')->unique(false)->change();
            $table->string('email')->unique(false)->change();
            $table->string('medsos')->unique(false)->change();
            $table->string('instagram')->unique(false)->nullable()->change();
            $table->string('linkkaryaig')->unique()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->text('nim')->unique()->change();
            $table->text('email')->unique()->change();
            $table->text('medsos')->unique()->change();
            $table->text('instagram')->unique()->nullable()->change();
            $table->text('linkkaryaig')->nullable()->change();
        });
    }
};
