<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGererPlaintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerer_plaintes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gerant_id');
            $table->foreign('gerant_id')->references('id')->on('gerants');
            $table->unsignedInteger('plainte_id');
            $table->foreign('plainte_id')->references('id')->on('plaintes');
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
        Schema::dropIfExists('gerer_plaintes');
    }
}
