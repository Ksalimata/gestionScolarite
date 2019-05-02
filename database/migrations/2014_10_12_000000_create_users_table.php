<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'sallykone',
                'email' =>'saly@gmail.com',
                'password' =>bcrypt("azerty2019"),
                'type' =>"super_admin",
                "created_at" => now()
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'camara djiba',
                'email' =>'camara@gmail.com',
                'password' =>bcrypt("camara2019"),
                'type' =>"member",
                "created_at" => now()
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'hamed kone',
                'email' =>'hamed@gmail.com',
                'password' =>bcrypt("hamed2019"),
                'type' =>"admin",
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
        Schema::dropIfExists('users');
    }
}
