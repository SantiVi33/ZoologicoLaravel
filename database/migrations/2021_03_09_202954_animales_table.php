<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Animales', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Especie');
            $table->string('PaisOrigen');
            $table->string('PaisesDondeHabitan');
            $table->string('Alimentacion');
            $table->float('Edad');
            $table->string('URLfoto');
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
        //
    }
}
