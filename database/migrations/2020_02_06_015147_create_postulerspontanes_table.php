<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulerspontanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulerspontanes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('recruteur_id');
            $table->unsignedBigInteger('cv_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
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
        Schema::dropIfExists('postulerspontanes');
    }
}
