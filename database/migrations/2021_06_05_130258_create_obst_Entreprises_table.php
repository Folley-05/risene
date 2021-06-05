<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObstEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('obst_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_entreprise')->unsigned();
			$table->integer('id_obstacle')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('obst_Entreprises');
	}
}