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
        Schema::create('ingredientes_predeterminados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->integer('pizza_id');#->unsigned;
            $table->string('n_ingrediente_p');
            $table->float('precio');
            $table->timestamps();
            #$table->foreign('pizza_id')->references('id')->on('create_pizzas_det_table')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredientes_predeterminados');
    }
};
