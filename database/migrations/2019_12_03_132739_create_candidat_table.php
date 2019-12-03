<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->unsignedBigIncrements('candidatId');
            $table->unsignedBigInteger('accountId');
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');//path to image
            $table->string('email');
            $table->string('telephone');
            $table->string('addresse');
            $table->date('dateNaissance');
            $table->string('linkedin');
            $table->unsignedBigInteger('cvId');
            $table->foreign('accountId')->references('accountId')->on('account');
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
        Schema::dropIfExists('candidats');
    }
}
