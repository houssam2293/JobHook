<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('offre_id');
            $table->unsignedBigInteger('cv_id');
            $table->foreign('offre_id')->references('id')->on('offres');
            $table->foreign('cv_id')->references('id')->on('cvs');
            $table->date('datePostuler');
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
        Schema::dropIfExists('postuler');
    }
}
