<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->id();
            // Informações básicas
            $table->string('empresa')->nullable();
            $table->string('site')->nullable(); // pode ser usado como <title>
            $table->string('aplicativo')->nullable();

            // Metatags básicas
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('author')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('configuracoes');
    }
};
