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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            // $table->unsignedBigInteger('quantity');
            // $table->unsignedBigInteger('product_id')->index();
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->unsignedBigInteger('cart_id')->index();
            // $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
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
        Schema::dropIfExists('product_carts');
    }
};
