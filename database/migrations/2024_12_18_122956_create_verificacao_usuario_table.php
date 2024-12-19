<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //essa verificação será usada para saber quais tipos de usuários estão cadastrados em meu sistema.
    public function up(): void
    {
        Schema::create('verificacao_usuario', function (Blueprint $table) {
            $table->id("id_verificacao");
            $table->String('status', lenght:15); //Administrador ou Colaborador
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificacao_usuario');
    }
};
