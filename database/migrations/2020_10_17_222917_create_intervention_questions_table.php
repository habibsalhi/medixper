<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_questions', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('question_id');
            $table->string('intervention_id');
            $table->timestamps();

            $table->foreign('question_id')->references('_id')->on('questions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('intervention_questions');
    }
}
