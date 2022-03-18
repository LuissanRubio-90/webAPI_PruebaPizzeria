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
        Schema::create('pizzas_det', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('cod_pizza');
            $table->string('n_pizza');
            $table->float('precio_s');
            $table->integer('predeterminado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas_det');
    }
};
