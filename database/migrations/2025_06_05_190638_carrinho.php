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
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->unsignedBigInteger('user_id'); // FK para usuarios
            $table->unsignedBigInteger('produto_id'); // FK para produtos
            $table->integer('quantidade')->default(1);
            $table->decimal('preco_unitario', 10, 2);
            $table->timestamp('data_adicionado')->useCurrent();
            $table->boolean('ativo')->default(true);

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrinho_itens');
    }
};
