<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscrire1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrire1s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned()->nullable();
            $table->foreign('etudiant_id')
                ->references('id')->on('etudiants')
                ->onDelete('cascade');
            $table->integer('annee_id')->unsigned()->nullable();
            $table->foreign('annee_id')
                ->references('id')->on('annee_scolaires')
                ->onDelete('cascade');    
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
        Schema::dropIfExists('inscrire1s');
    }
}
