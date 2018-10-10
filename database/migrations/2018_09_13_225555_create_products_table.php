<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->unsignedInteger('category_id_pro');
            $table->string('name_pro');
            $table->string('description_pro')->nullable();
            $table->decimal('priceu_pro',11,2)->nullable();
            $table->decimal('price_pro',11,2)->nullable();
            $table->integer('quantity_pro')->nullable();
            $table->string('image_pro')->nullable();
            $table->enum('status_pro',['ACTIVO','INACTIVO','PAUSA']);
            $table->string('slug_pro');
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
        Schema::dropIfExists('products');
    }
}
