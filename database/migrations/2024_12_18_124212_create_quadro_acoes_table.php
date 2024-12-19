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
        Schema::create('quadro_acoes', function (Blueprint $table) {
            $table->id('id_acao');
            $table->String('objetivo_geral', lenght:100);
            $table->String('objetivo_especifico', lenght:50);
            $table->String('plano_ensino', lenght:500);//Alteração
            $table->String('metodologia', lenght:500);
            $table->date('calendario_treinamento');
            $table->String('avaliacao_desempenho', lenght:200);
            $table->String('registro_treinamento', lenght:200);//Alteração
            $table->String('acoes', lenght:500);
            $table->String('equipamentos', lenght:500);

              //chave estrangeira vindo da tabela "empresa"
              $table->foreignId('id_quadrAcoesEmpresa_zk')->constrained
              (
                  table:'empresa', indexName: 'id_empresa'
              );
              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quadro_acoes');
    }
};
