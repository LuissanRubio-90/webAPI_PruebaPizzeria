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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('cod_pedido');
            $table->integer('cliente_id');#->unsigned;
            $table->integer('sucursal_id');#->unsigned;
            $table->timestamps();

            #$table->foreign('cliente_id')->references('id')->on('create_users_table')->onDelete("cascade");
            #$table->foreign('sucursal_id')->references('id')->on('create_sucursales_table')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
