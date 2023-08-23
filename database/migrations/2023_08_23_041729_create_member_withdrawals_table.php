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
        Schema::create('member_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->string('ref_code')->unique();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('product_affiliate_id');
            $table->double('total_withdraw');
            $table->integer('status')->comment('0:proces, 1:success');
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
        Schema::dropIfExists('member_withdrawals');
    }
};
