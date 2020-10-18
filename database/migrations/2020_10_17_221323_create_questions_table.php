<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('categories_id');

            $table->string('title')->nullable();
            $table->string('equivalence')->nullable();
            $table->string('value')->nullable();
            $table->string('sex');
            $table->string('type')->nullable();
            $table->boolean('obligatory');
            $table->timestamps();

            $table->foreign('categories_id')->references('_id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
