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
        Schema::create('traducoes', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('abreviacao');
            $table->unsignedBigInteger('idioma_id');
            $table->timestamps();

            $table->foreign('idioma_id')->references('id')->on('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traducoes');
    }
};
