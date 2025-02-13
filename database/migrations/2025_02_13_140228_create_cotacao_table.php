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
        Schema::create('cotacao', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_evento');
            $table->string('telefone');
            $table->string('email');
            $table->string('localidade');
            $table->integer('qtd_convidados'); 
            $table->text('observacoes');
            $table->foreignId('status_cotacao_id')->constrained('categoria_evento')->onDelete('cascade');
            $table->foreignId('categoria_bar_id')->constrained('categoria_bar')->onDelete('cascade');
            $table->foreignId('categoria_evento_id')->constrained('status_cotacao')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotacao');
    }
};
