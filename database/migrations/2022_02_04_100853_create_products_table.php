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
            $table->bigIncrements('id');
            $table->integer('merchent_id');
            $table->string('product_name')->nullable();
            $table->string('pro_category')->nullable();
            $table->string('pro_price')->nullable();
            $table->string('pro_discount')->nullable();
            $table->string('pro_valid_till')->nullable();
            $table->string('pro_description')->nullable();
            $table->string('pro_image')->nullable();
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
