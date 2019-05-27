<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coeficient');
            $table->integer('nbreMatiere');
            $table->integer('matiere_id')->unsigned()->nullable();
            $table->foreign('matiere_id')
                ->references('id')->on('matieres')
                ->onDelete('cascade');
            $table->integer('filiere_id')->unsigned()->nullable();
            $table->foreign('filiere_id')
                ->references('id')->on('filieres')
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
        Schema::dropIfExists('dispensers');
    }
}
