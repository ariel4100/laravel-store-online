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
            $table->unsignedInteger('size_id_pro')->nullable();
            $table->unsignedInteger('color_id_pro')->nullable();
            $table->string('name_pro');
            $table->string('description_pro')->nullable();
            $table->decimal('price_pro',11,2);
            $table->integer('quantity_pro');
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
