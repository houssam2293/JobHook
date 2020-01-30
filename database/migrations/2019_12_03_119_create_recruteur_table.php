<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->bigIncrements('recruteurId');
            $table->unsignedBigInteger('accountId');
            $table->foreign('accountId')->references('id')->on('users');
            $table->string('type');
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('logo');
            $table->string('email');
            $table->string('siteWeb');
            $table->unsignedBigInteger('contactId');
            $table->foreign('contactId')->references('contactId')->on('contacts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruteur');
    }
}
