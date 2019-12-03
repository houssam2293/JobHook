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
        Schema::create('listCompetencesOffre', function (Blueprint $table) {
            $table->bigIncrements('competencesId');
            //$table->foreign('conpetencesId')->references('conpetencesId')->on('conpetences');
            $table->unsignedBigInteger('offreId');
            //$table->foreign('offreId')->references('offreId')->on('offre');
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
