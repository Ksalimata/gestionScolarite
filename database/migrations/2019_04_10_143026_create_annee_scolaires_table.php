<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnneeScolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_scolaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_annee');
            $table->string('libel_annee');
            $table->string('debut_annee');
            $table->string('fin_annee');
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
        Schema::dropIfExists('annee_scolaires');
    }
}
