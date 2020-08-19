<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreerTablePersonnage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnage',function(Blueprint $table){
//		$table->increments('id');
//		$table->integer('id_utilisateur')->unsigned();
//		$table->foreign('id_utilisateur')
//			->references('id')
//			->on('utilisateur')
//			->onDelete('restrict')
//			->onUpdate('restrict');
//		$table->string('nom');
//		$table->boolean('homme');
//		$table->integer('point_vie');
//		$table->integer('point_vie_max');
//		$table->integer('point_action');
		$table->integer('point_action_max');
//		$table->integer('point_deplacement');
		$table->integer('point_deplacement_max');
//		$table->integer('point_experience');
//		$table->integer('point_attaque');
//		$table->integer('point_defense');

		//a therme numero du serveur lors qu'il y en aura plusieur :
		//$table->foreignId('id_serveur')->constrainer('serveur_map');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personnage');
    }
}
