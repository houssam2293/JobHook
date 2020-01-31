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
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('diplome');
            $table->unsignedBigInteger('domaine_id');
            $table->string('lieu');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->unsignedBigInteger('cv_id');
            $table->foreign('domaine_id')->references('id')->on('domaines');
            $table->foreign('cv_id')->references('id')->on('cvs');
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
