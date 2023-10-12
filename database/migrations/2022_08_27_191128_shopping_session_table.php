<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShoppingSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('shopping_session', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('user_id')->nullable();
        //     $table->decimal('total');
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('shopping_session');
    }
}
