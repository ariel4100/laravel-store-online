<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('user_id_ord')->unsigned();
            $table->integer('product_id_ord')->unsigned();
            $table->integer('quantity_ord');
            $table->decimal('price_ord');
            $table->decimal('total_ord');
            $table->timestamps();

            //$table->foreign('product_id')->references('id')->on('products');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
