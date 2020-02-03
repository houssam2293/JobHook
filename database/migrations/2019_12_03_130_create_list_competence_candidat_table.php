<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListCompetenceCandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('listCompetencesCandidats', function (Blueprint $table) {
          $table->unsignedBigInteger('competence_id');
          $table->unsignedBigInteger('cv_id');
          $table->foreign('competence_id')->references('id')->on('competences');
          $table->foreign('cv_id')->references('id')->on('cvs');
          $table->primary(['competence_id', 'cv_id']);
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
        Schema::dropIfExists('listCompetencesCandidat');
    }
}
