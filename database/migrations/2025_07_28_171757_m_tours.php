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
        Schema::create('m_tours', function (Blueprint $table) {
            $table->id('tour_id');
            $table->string('tour_name', 250);
            $table->string('description')->nullable();
            $table->string('image')->nullable(); // bisa satu gambar utama
            $table->string('lokasi')->nullable();
            $table->text('information')->nullable();
            $table->boolean('is_open')->default(true); // toggle open/closed untuk tour
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
