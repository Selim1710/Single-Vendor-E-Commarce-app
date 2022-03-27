<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('model');
            $table->string('product_name');
            $table->integer('regular_price');
            $table->string('product_image');
            $table->double('product_offer');
            $table->string('product_description');

            $table->unsignedBigInteger('subCategory_id')->default();
            $table->foreign('subCategory_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade');

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
