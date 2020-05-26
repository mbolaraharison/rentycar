<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorairesCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires_conges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('heure_ouverture');
            $table->time('heure_fermeture');
            $table->unsignedInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->unsignedInteger('conge_id');
            $table->foreign('conge_id')->references('id')->on('conges');
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
        Schema::dropIfExists('horaires_conges');
    }
}
