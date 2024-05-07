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
        Schema::create('resepobat', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('anak', 100);
            $table->string('dewasa', 100);
            $table->string('stok', 100);
            $table->string('ketersediaan', 100);
            $table->date('expired');
            $table->string('harga', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resepobat');
    }
};
