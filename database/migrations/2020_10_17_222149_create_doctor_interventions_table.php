<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_interventions', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('doctor_id');
            $table->string('intervention_id');

            $table->float('price');
            $table->string('feedback')->nullable();
            $table->string('link');
            $table->integer('hospital');
            $table->integer('stays');
            $table->timestamps();

            $table->foreign('doctor_id')->references('_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('intervention_id')->references('_id')->on('interventions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_interventions');
    }
}
