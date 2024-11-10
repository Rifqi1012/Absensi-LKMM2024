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
        Schema::create('data_peserta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nim');
            $table->string('nama');
            $table->string('kelompok');
            $table->string('day_1')->default(false);
            $table->string('day_2')->default(false);
            $table->string('day_3')->default(false);
            $table->string('day_4')->default(false);
            $table->string('day_5')->default(false);
            $table->string('day_6')->default(false);
            $table->string('day_7')->default(false);
            $table->string('day_8')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peserta');
    }
};
