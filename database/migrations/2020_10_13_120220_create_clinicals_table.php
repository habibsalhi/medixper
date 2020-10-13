<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicals', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('state_id');

            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('phone');
            $table->integer('fax');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('url');
            $table->text('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('status');

            $table->foreign('state_id')->references('_id')->on('states')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('clinicals');
    }
}
