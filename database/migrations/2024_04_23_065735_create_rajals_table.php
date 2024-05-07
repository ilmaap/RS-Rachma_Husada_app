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
        Schema::create('rajals', function (Blueprint $table) {
            $table->bigInteger('NIK')->length(16)->primary();
            $table->string('Nama_Pasien',100);
            $table->string('Jenis_Kelamin',20);
            $table->string('Alamat',100);
            $table->string('Keluhan',100);
            $table->string('Ruang_Pemeriksaan',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rajals');
    }
};
