<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_order__product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('price',11,2);
            $table->string('size');
            $table->string('color');
            $table->unsignedInteger('id_product')->nullable();
            $table->unsignedInteger('id_order')->nullable();
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
        Schema::dropIfExists('_order__product');
    }
}
