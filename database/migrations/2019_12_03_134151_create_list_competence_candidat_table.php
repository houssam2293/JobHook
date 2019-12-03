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
        Schema::create('listCompetencesCandidat', function (Blueprint $table) {
          $table->unsignedBigIncrements('competenceId');
          $table->unsignedBigIncrements('cvId');
          $table->foreign('competenceId')->references('competenceId')->on('competences');
          $table->foreign('cvId')->references('cvId')->on('cv');
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
