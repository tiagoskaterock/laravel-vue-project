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
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->string('caminho'); // Caminho do arquivo da imagem
            $table->string('nome');    // Nome da imagem
            $table->string('slug')->unique(); // Slug único para identificação amigável
            $table->string('tipo')->nullable(); // Tipo da imagem (banner, login, site, etc)
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
