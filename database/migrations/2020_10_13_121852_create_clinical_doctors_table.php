<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_doctors', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('doctor_id');
            $table->string('clinical_id');

            $table->foreign('doctor_id')->references('_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('clinical_id')->references('_id')->on('clinicals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('clinical_doctors');
    }
}
