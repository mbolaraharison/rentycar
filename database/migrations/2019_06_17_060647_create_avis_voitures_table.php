<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('voiture_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->unsignedInteger('avis_id');
            $table->foreign('avis_id')->references('id')->on('avis');
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
        Schema::dropIfExists('avis_voitures');
    }
}
