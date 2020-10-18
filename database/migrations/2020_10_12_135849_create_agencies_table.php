<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('manager_id');
            $table->string('state_id');

            $table->string('name');
            $table->string('code')->nullable();
            $table->string('phone');
            $table->string('fax');
            $table->string('email')->unique();
            $table->string('address');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('manager_id')->references('_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('state_id')->references('_id')->on('states')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
