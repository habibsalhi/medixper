<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('agency_id');
            $table->string('tray_id');
            $table->string('state_id');

            $table->string('name');
            $table->string('code');
            $table->string('phone');
            $table->string('fax');
            $table->string('url');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('viber')->nullable();
            $table->string('whatsapp')->nullable();

            $table->foreign('agency_id')->references('_id')->on('agencies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tray_id')->references('_id')->on('trays')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sites');
    }
}
