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
        Schema::create('cadastro_login', function (Blueprint $table) {
            $table->id('id_cadastro');
            $table->String('nome', lenght:255);
            $table->String('sobre_nome', lenght:255);
            $table->int('telefone', lenght:12);
            $table->String('local_residencia', lenght:50);
            $table->int('cpf', lenght:11);
            $table->String('registro_geral', lenght:255);
            $table->String('comprovante_de_atuacao', lenght:255);
            $table->unique('email', lenght: 255); //fazer uma verificação no backend
            $table->String('senha', lenght:255);
            $table->date('data_nascimento');

            //chave estrangeira vindo da tabela "verificacao_usuario"
            $table->foreignId('id_fichaTecVerificacao_zk')->constrained
            (
                table:'verificacao_usuario', indexName: 'id_verificacao'
            );
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_login');
    }
};
