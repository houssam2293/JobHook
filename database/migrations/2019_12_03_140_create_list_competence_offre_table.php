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
            $table->unsignedBigInteger('competence_id');
            $table->unsignedBigInteger('offre_id');
            $table->foreign('competence_id')->references('id')->on('competences');
            $table->foreign('offre_id')->references('id')->on('offres');
            $table->primary(['competence_id', 'offre_id']);
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
