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
          $table->bigIncrements('listCompetencesCandidatsId');
          $table->unsignedBigInteger('competenceId');
          $table->unsignedBigInteger('cvId');
          $table->foreign('competenceId')->references('competenceId')->on('competences');
          $table->foreign('cvId')->references('cvId')->on('cvs');
          $table->unique('competenceId', 'cvId');
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
