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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('no_kartu',50)->unique();
            $table->string('nama',100);
            $table->string('tempatLahir',100);
            $table->date('tanggalLahir');
            $table->string('jenisKelamin',20);
            $table->string('alamat',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
