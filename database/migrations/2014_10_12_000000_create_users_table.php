<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->unsignedInteger('lga_id')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->string('pic')->nullable();
            $table->string('phone_num')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("lga_id")->references("id")->on("lgas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
