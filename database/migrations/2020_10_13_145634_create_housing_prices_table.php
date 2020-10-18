<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housing_prices', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('hotel_id');
            $table->string('housing_id');

            $table->float('patient');
            $table->float('accompany');
            $table->timestamps();

            $table->foreign('hotel_id')->references('_id')->on('hotels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('housing_id')->references('_id')->on('housings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housing_prices');
    }
}
