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
            $table->text('pickup_address');
            $table->unsignedInteger('pickup_lga_id');
            $table->text('drop_off_address');
            $table->unsignedInteger('drop_off_lga_id');
            $table->double('amount')->default(0.0);
            $table->enum('status', ['PENDING', 'EN_ROUTE', 'DELIVERED', 'CANCELLED'])->default('PENDING');
            $table->text('description');
            $table->double('weight')->nullable()->comment('weight in KG');
            $table->string('tracking_number')->unique()->nullable();
            $table->string('recipient_name', 80);
            $table->string('recipient_phone_number', 15);
            $table->enum('payment_status', ['PAID' , 'FAIL'])->nullable();
            $table->unsignedInteger('rider_id')->nullable()->comment('A rider user with role - rider');
            $table->unsignedInteger('customer_id')->comment('A customer user with role - customer');;
            $table->date("expected_delivery_date")->nullable();
            $table->timestamps();

            $table->foreign("rider_id")->references("id")->on("users");
            $table->foreign("customer_id")->references("id")->on("users");
            $table->foreign("pickup_lga_id")->references("id")->on("lgas");
            $table->foreign("drop_off_lga_id")->references("id")->on("lgas");
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
