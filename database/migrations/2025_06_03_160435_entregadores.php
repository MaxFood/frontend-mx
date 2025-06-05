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
        Schema::create('entregadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable(); // Precisa garantir que a tabela `usuarios` exista
            $table->string('veiculo', 50)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('placa', 20)->nullable();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregadores');
    }
};
