<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_deals', function (Blueprint $table) {
            $table->id();
            $table->string('offer_title');
            $table->string('type');
            $table->string('model');
            $table->string('product_name');
            $table->string('image');
            $table->integer('base_price');
            $table->integer('save_money');
            $table->integer('stock_quantity');
            $table->string('details');
            $table->string('stock_status')->default('In Stock');
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
        Schema::dropIfExists('laptop_deals');
    }
}
