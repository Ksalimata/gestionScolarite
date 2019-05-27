<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mat_etudiant');
            $table->date('dateNaissance');
            $table->string('email');
            $table->string('nomPere');
            $table->string('nomMere');
            $table->string('casUrgence');
            $table->string('ecole');
            $table->string('scolarite');
            $table->string('nom_etudiant');
            $table->string('lieu');
            $table->integer('telephone');
            $table->string('profPere');
            $table->string('profMere');
            $table->string('profUrgence');
            $table->string('prenom_etudiant');
            $table->string('nationnalite');
            $table->string('residense');
            $table->integer('telPere');
            $table->integer('telMere');
            $table->integer('contact');
            $table->string('anneOrigine');
            $table->string('nature');
            $table->date('dateInscri');
            $table->integer('classe_id')->unsigned()->nullable();
            $table->foreign('classe_id')
                ->references('id')->on('classes')
                ->onDelete('cascade');
            $table->integer('etabli_id')->unsigned()->nullable();
            $table->foreign('etabli_id')
                ->references('id')->on('etablissements')
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
        Schema::dropIfExists('etudiants');
    }
}
