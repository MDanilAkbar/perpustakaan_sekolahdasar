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
        Schema::create('hibahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_hibah',50)->unique();
            $table->string('nama',100);
            $table->string('judulbuku',100);
            $table->string('jumlahbuku',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hibahs');
    }
};
