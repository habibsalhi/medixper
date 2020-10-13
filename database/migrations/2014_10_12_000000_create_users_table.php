<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            //$table->bigIncrements('id');
            $table->string('state_id');
            $table->string('tray_id')->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('image');
            $table->unsignedInteger('age');
            $table->string('sex');
            $table->string('login');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('cv')->nullable();
            $table->boolean('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->foreign('state_id')->references('_id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tray_id')->references('_id')->on('trays')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
