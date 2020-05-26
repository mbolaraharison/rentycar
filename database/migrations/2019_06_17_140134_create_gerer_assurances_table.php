<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGererAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerer_assurances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gerant_id');
            $table->foreign('gerant_id')->references('id')->on('gerants');
            $table->unsignedInteger('assurance_id');
            $table->foreign('assurance_id')->references('id')->on('assurances');
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
        Schema::dropIfExists('gerer_assurances');
    }
}
