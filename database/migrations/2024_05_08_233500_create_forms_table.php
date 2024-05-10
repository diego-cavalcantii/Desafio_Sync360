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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('rua');
            $table->integer('numero');
            $table->string('comple');
            $table->string('bairro');
            $table->string('estado');
            $table->text('biografia');
            $table->string('imagem')->nullable(); // Adicionando coluna para armazenar o nome do arquivo da imagem
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
