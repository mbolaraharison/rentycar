<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('statut_juridique');
            $table->string('raison_sociale');
            $table->string('adresse');
            $table->string('chemin_logo');
            $table->string('telephone', 16);
            $table->string('ville');
            $table->string('siege_social');
            $table->string('pays');
            $table->string('description');
            $table->string('duns');
            $table->integer('nombre_total_voitures_entreprise');
            $table->integer('nombre_total_agences');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('entreprises');
    }
}
