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
         Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_loja')->nullable();
            $table->unsignedBigInteger('id_entregador')->nullable();
            $table->string('status', 50)->nullable();
            $table->dateTime('data_pedido')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('valor_total', 10, 2)->nullable();

            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('id_loja')
                  ->references('id')
                  ->on('lojas')
                  ->onDelete('cascade');

            $table->foreign('id_entregador')
                  ->references('id')
                  ->on('entregadores')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
};
