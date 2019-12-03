<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation', function (Blueprint $table) {
            $table->bigIncrements('formationId');
            $table->string('diplome');
            $table->unsignedBigInteger('domaineId');
            $table->string('lieu');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->unsignedBigInteger('cvId');
            $table->foreign('domaineId')->references('domaineId')->on('domaine');
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
        Schema::dropIfExists('formation');
    }
}
