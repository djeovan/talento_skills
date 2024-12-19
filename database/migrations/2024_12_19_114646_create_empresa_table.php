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
        Schema::create('empresa', function (Blueprint $table) {
            $table->id('id_empresa');
            $table->String('nome_razaoSocial', lenght:50);
            $table->String('cnpj', lenght:12);
            $table->String('cnae', lenght:45);
            $table->int('telefone', lenght:12);
            $table->String('email', lenght:50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
