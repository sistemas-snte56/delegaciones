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
        Schema::create('secretarias', function (Blueprint $table) {
            $table->id();
            $table->string('cartera_secretaria', 150);
            $table->unsignedBigInteger('id_nomenclatura');
            $table->timestamps();

            $table->foreign('id_nomenclatura')->references('id')->on('nomenclatura');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretarias');
    }
};
