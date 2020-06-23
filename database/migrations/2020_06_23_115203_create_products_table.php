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
            $table->string('images');
            $table->foreignId('seller_id');
            $table->foreignId('category_id');
            $table->foreignId('sub_category_id')->nullable();
            $table->foreignId('coupon_id')->nullable();
            $table->timestamp('production_date')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->double('price');
            $table->integer('quantity');
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
