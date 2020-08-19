<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function(Blueprint $table){
		$table->increments('id');
		$table->string('pseudo')->unique();
		$table->string('mot_de_passe',60);
		$table->string('mail')->unique();
		$table->boolean('administrateur')->default(false);
		$table->rememberToken();
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
        //
    }
}
