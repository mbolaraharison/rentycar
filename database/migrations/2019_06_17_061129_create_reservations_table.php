<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_prise_en_charge');
            $table->time('heure_prise_en_charge');
            $table->date('date_restitution');
            $table->time('heure_restitution');
            $table->string('lieu_restitution');
            $table->string('numero_vol');
            $table->string('statut_reservation');
            $table->double('prix_reservation');
            $table->unsignedInteger('conducteur_id');
            $table->foreign('conducteur_id')->references('id')->on('conducteurs');
            $table->unsignedInteger('carte_de_credit_id');
            $table->foreign('carte_de_credit_id')->references('id')->on('carte_de_credits');
            $table->unsignedInteger('voiture_id');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
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
        Schema::dropIfExists('reservations');
    }
}
