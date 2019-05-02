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
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->string('sexe');
            $table->date('dateNaissance');
            $table->string('email');
            $table->integer('telephone');
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
