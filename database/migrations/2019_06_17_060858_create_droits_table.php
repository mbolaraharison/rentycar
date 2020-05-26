<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle_droit');
            $table->morphs('droit');
            $table->unsignedInteger('gerant_id');
            $table->unsignedInteger('entreprise_id');
            $table->unsignedInteger('agence_id');
            $table->unsignedInteger('client_id');
            $table->foreign('gerant_id')->references('id')->on('gerants');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('droits');
    }
}
