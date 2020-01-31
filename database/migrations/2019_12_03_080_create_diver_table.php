<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('typeDiver_id');
          $table->string('intitule');
          $table->string('lieu');
          $table->date('dateDebut');
          $table->date('datefin');
          $table->unsignedBigInteger('cv_id');
          $table->foreign('typeDiver_id')->references('id')->on('typeDivers');
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
        Schema::dropIfExists('divers');
    }
}
