<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trays', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('agency_id');
            $table->string('state_id');

            $table->string('name');
            $table->string('logo');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->integer('fax');
            $table->string('address');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('viber');
            $table->string('whatsapp');
            $table->string('url');

            $table->foreign('agency_id')->references('_id')->on('agencies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('trays');
    }
}
