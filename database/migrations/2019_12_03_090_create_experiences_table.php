<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('intitule');
          $table->string('lieu');
          $table->date('dateDebut');
          $table->date('datefin');
          $table->string('description');
          $table->unsignedBigInteger('cv_id');
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
        Schema::dropIfExists('experiences');
    }
}
