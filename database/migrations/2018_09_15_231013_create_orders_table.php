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
            $table->unsignedInteger('user_id_ord')->nullable();
            //$table->integer('product_id_ord')->unsigned();
            $table->string('shipping_ord')->nullable();
            $table->enum('status_ord', ['PENDIENTE', 'EN PROCESO','FINALIZADO'])->default('PENDIENTE');
            $table->decimal('total_ord')->nullable();
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
