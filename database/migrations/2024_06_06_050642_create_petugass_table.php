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
        Schema::create('petugass', function (Blueprint $table) {
            $table->id();
            $table->string('nik',50)->unique();
            $table->string('nama',100);
            $table->string('hp',20);
            $table->string('alamat',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugass');
    }
};
