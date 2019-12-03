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
          $table->unsignedBigIncrements('diverId');
          $table->unsignedBigInteger('typeDiverId');
          $table->string('intitule');
          $table->string('lieu');
          $table->date('dateDebut');
          $table->date('datefin');
          $table->unsignedBigInteger('cvId');
          $table->foreign('typeDiverId')->references('typeDiverId')->on('typeDivers');
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
        Schema::dropIfExists('divers');
    }
}
