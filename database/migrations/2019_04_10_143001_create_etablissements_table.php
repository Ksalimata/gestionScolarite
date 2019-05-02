<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_etabli');
            $table->string('nom_etabli');
            $table->string('adresse');
            $table->integer('telephone');
            $table->timestamps();
        });

        DB::table('etablissements')->insert(
            array(
                "code_etabli" => "ITES2019",
                "nom_etabli" => "ITES",
                "adresse" => "Abidjan, deux plateau",
                "telephone" => "22401579",
                "created_at" => now()
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
