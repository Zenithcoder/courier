<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('pickup');
            $table->string('dropoff');
            $table->float('amount');
            $table->tinyInteger('status')->default(1);
            $table->string('type');
            $table->string('city');
            $table->string('weight');
            $table->string('payment_status');
            $table->string('assign')->default(0);
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
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
