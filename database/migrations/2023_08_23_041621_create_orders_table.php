<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('member_id');
            $table->string('transaction_id')->nullable();
            $table->integer('qty')->default(1);
            $table->double('price')->nullable();
            $table->double('total_price');
            $table->integer('transaction_status')->comment('0:pending, 1:settlement, 2:failed');
            $table->string('payment_type')->nullable();
            $table->string('transaction_token')->nullable();
            $table->timestamp('transaction_time');
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
};
