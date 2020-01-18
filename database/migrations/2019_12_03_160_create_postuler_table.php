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
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('cvId');
            $table->date('datePostuler');
            $table->foreign('id')->references('id')->on('offers')->onDelete('cascade');
            $table->foreign('cvId')->references('cvId')->on('cvs');
            $table->unique('id','cvId');
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
