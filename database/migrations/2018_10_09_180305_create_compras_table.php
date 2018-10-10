<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_compra');
            $table->bigInteger('total_compra');
            $table->integer('proveedor_compra')->unsigned();
            $table->foreign('proveedor_compra')->references('id')->on('proveedors');
            $table->text('tipo_comprobante_compra');
            $table->integer('num_comprobante_compra')->null();
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
        Schema::dropIfExists('compras');
    }
}
