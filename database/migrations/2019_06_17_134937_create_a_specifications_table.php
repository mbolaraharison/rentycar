<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateASpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('voiture_id');
            $table->unsignedInteger('specification_id');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->foreign('specification_id')->references('id')->on('specifications');
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
        Schema::dropIfExists('a_specifications');
    }
}
