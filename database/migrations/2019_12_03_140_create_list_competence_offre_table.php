<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCompetenceOffreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listCompetencesOffres', function (Blueprint $table) {
            $table->bigIncrements('listCompetencesOffres');
            $table->unsignedBigInteger('competenceId');
            $table->foreign('competenceId')->references('competenceId')->on('competences');
            $table->unsignedBigInteger('offreId');
            $table->foreign('offreId')->references('offreId')->on('offers');
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
        Schema::dropIfExists('listCompetencesOffre');
    }
}
