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
        Schema::create('detalles_pedido', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->integer('pedido_id');#->unsigned;
            $table->integer('pizza_id');#->unsigned;
            $table->integer('cantidad');
            $table->float('precio');
            $table->float('total');
            $table->timestamps();

            #$table->foreign('pedido_id')->references('id')->on('create_pedidos_table')->onDelete("cascade");
            #$table->foreign('pizza_id')->references('id')->on('create_pizzas_table')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_pedido');
    }
};
