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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->char('nombre',15);//hacer migracion
            $table->string('rutaimg');
            $table->smallInteger('stock');
            $table->string('detalle');
            $table->string('tipo');
            $table->char('talla',2);
            //agregar columna imagenes
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
