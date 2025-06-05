<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj', 20)->unique();
            $table->string('senha');
            $table->string('telefone', 20);
            $table->string('nome_loja', 100);
            $table->string('email', 100);
            $table->unsignedBigInteger('id_endereco');
            $table->timestamps();

            $table->foreign('id_endereco')->references('id')->on('enderecos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lojas');
    }
};
