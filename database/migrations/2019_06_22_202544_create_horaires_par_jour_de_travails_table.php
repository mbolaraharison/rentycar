<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorairesParJourDeTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires_par_jour_de_travails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('heure_ouverture');
            $table->time('heure_fermeture');
            $table->unsignedInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->unsignedInteger('jours_de_travail_par_semaine_id');
            $table->foreign('jours_de_travail_par_semaine_id')->references('id')->on('jours_de_travail_par_semaines');
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
        Schema::dropIfExists('horaires_par_jour_de_travails');
    }
}
