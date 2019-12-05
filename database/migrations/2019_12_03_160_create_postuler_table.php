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
            $table->bigIncrements('postulerId');
            $table->unsignedBigInteger('offreId');
            $table->unsignedBigInteger('cvId');
            $table->date('datePostuler');
            $table->foreign('offreId')->references('offreId')->on('offres');
            $table->foreign('cvId')->references('cvId')->on('cvs');
            $table->unique('offreId','cvId');
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
