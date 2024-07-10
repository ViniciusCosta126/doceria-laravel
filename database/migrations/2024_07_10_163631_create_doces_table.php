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
        Schema::create('doces', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('preco');
            $table->integer('qtd_disponivel');
            $table->string('tipo_qtd');
            $table->unsignedBigInteger('categoria_id')->nullable(); // Definindo o campo da chave estrangeira manualmente
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade'); // Definindo a chave estrangeira manualmente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doces');
    }
};
