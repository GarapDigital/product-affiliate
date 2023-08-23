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
        Schema::create('user_wallet_mutations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_wallet_id');
            $table->unsignedBigInteger('product_affiliate_id');
            $table->string('mutation_name');
            $table->double('mutation_amount');
            $table->enum('mutation_type', ['withdraw', 'commission']);
            $table->integer('status')->comment('0:process, 1:success');
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
        Schema::dropIfExists('user_wallet_mutations');
    }
};
