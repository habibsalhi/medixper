<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->integer('code')->unique();
            $table->integer('phone_code')->nullable();
            $table->string('eng_code')->unique();
            $table->string('fr_code')->unique();
            $table->string('eng_name');
            $table->string('fr_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
