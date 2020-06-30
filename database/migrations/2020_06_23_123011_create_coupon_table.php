<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code')->unique();
            $table->integer('discount');
            $table->enum('status', ['available', 'unavailable']);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->double('minimum_price')->nullable();
            $table->double('maximum_price')->nullable();
            $table->integer('minimum_quantity')->nullable();
            $table->integer('maximum_quantity')->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
