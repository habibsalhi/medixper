<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_interventions', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('balance_id');
            $table->string('intervention_id');

            $table->timestamps();

            $table->foreign('balance_id')->references('_id')->on('balances')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('balance_interventions');
    }
}
