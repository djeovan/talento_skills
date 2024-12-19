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
        Schema::create('relacional_acoes_cadlogin', function (Blueprint $table) {
            $table->id('relacionalAcoesCadlogin');
            //entidade relacional relacionada a tabela "cadastro_login"
            $table->foreignId('relacional_Cadlogin_zk')->constrained
            (
                table:'cadastro_login', indexName:'id_cadastro'
            );
            
            //entidade relacional relacionada a tabela "quadro_acoes"
            $table->foreignId('relacional_acoes_zk')->constrained
            (
                table:'quadro_acoes', indexName:'id_acao'
            );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacional_acoes_cadlogin');
    }
};
