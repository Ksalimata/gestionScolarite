<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_classe');
            $table->string('libelle_classe');
            $table->integer('filiere_id')->unsigned()->nullable();
            $table->foreign('filiere_id')
                ->references('id')->on('filieres')
                ->onDelete('cascade');  
            $table->integer('niveau_id')->unsigned()->nullable();
            $table->foreign('niveau_id')
                ->references('id')->on('niveaux')
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
        Schema::dropIfExists('classes');
    }
}
