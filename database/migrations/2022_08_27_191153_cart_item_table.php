<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cart_item', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('session_id');
        //     $table->unsignedBigInteger('product_id')->nullable();
        //     $table->integer('quantity');
        //     $table->timestamps();

        //     $table->foreign('session_id')->references('id')->on('shopping_session')->onDelete('cascade');
        //     $table->foreign('product_id')->references('id')->on('product')->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('cart_item');
    }
}
