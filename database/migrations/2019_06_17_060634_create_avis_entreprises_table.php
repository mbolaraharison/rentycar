<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('entreprise_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
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
        Schema::dropIfExists('avis_entreprises');
    }
}
