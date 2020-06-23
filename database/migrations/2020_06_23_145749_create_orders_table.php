<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('seller_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('billing_phone')->nullable();
            $table->string('billing_address')->nullable();
            $table->enum('payment_method', ['payment', 'on_delivery'])->default('on_delivery');
            $table->enum('payment_status', ['failed', 'done'])->default('done');
            $table->enum('order_status', ['delivered', 'processing', 'cancelled'])->default('processing');
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
        Schema::dropIfExists('orders');
    }
}
