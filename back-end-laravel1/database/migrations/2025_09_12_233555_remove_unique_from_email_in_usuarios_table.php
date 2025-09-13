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
        Schema::table('usuarios', function (Blueprint $table) {
            // Remove o índice único do campo email
            $table->dropUnique('usuarios_email_unique');
            // 👆 esse nome é o que o Laravel gera automaticamente:
            // nomeDaTabela_nomeDaColuna_unique
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            // Caso precise voltar atrás, adiciona de novo
            $table->unique('email');
        });
    }
};

