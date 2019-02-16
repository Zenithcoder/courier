<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("order_id");
            $table->text("description");
            $table->text("current_location");
            $table->unsignedInteger("current_lga_id");
            $table->text("next_location");
            $table->unsignedInteger("next_lga_id");
            $table->date("expected_delivery_date");
            $table->timestamps();

            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("current_lga_id")->references("id")->on("lgas");
            $table->foreign("next_lga_id")->references("id")->on("lgas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_activities');
    }
}
