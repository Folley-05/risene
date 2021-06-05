<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObstacleEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('obstacleEntreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('importance');
		});
	}

	public function down()
	{
		Schema::drop('obstacleEntreprises');
	}
}