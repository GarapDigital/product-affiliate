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
        Schema::create('member_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('ref_code')->unique();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('product_affiliate_id');
            $table->double('total_order_price');
            $table->double('commission_percent');
            $table->double('total_commission')->comment('Not in percent');
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
        Schema::dropIfExists('member_commissions');
    }
};
