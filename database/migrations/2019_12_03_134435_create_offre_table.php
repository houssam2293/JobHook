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
        Schema::create('offre', function (Blueprint $table) {
            $table->bigIncrements('offreId');
            $table->string('intitule');
            $table->string('type');
            $table->unsignedBigInteger('domaineId');
            //$table->foreign('domaineId')->references('domaineId')->on('domaine');
            $table->string('diplomeRequis');
            $table->integer('anneeExperience');
            $table->string('lieu');
            $table->string('remuneration');
            $table->date('dateDepot');
            $table->date('dateDebut');
            $table->string('duree');
            $table->string('status');
            $table->unsignedBigInteger('competencesId');
            //$table->foreign('conpetencesId')->references('conpetencesId')->on('conpetences');
            $table->string('description');
            $table->unsignedBigInteger('recruteurId');
          //  $table->foreign('recruteurId')->references('recruteurId')->on('recruteur');
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
        Schema::dropIfExists('offre');
    }
}
