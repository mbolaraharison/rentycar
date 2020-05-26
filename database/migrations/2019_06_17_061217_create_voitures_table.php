<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('immatriculation');
            $table->integer('nombre_places');
            $table->string('couleur');
            $table->string('description');
            $table->string('categorie');
            $table->string('type');
            $table->string('etat');
            $table->date('date_disponibilite');
            $table->time('heure_disponibilite');
            $table->date('lieu_prise_en_charge_voiture');
            $table->string('status');
            $table->string('carburant');
            $table->string('politique_carburant');
            $table->string('chemin_image');
            $table->integer('nombre_bagages');
            $table->string('kilometrage');
            $table->string('transmission');
            $table->unsignedInteger('marque_id');
            $table->foreign('marque_id')->references('id')->on('marques');
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
        Schema::dropIfExists('voitures');
    }
}
