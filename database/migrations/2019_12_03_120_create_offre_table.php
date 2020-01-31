<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule');
            $table->string('type');
            $table->unsignedBigInteger('domaine_id');
            $table->foreign('domaine_id')->references('id')->on('domaines');
            $table->string('diplomeRequis');
            $table->integer('anneeExperience');
            $table->string('lieu');
            $table->string('remuneration');
            $table->date('dateDepot');
            $table->date('dateDebut');
            $table->string('duree');
            $table->string('status');

            $table->string('competences');

            $table->string('description');
            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
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
        Schema::dropIfExists('offers');
    }
}
