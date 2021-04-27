<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsommationEnergetiquesTable extends Migration {

	public function up()
	{
		Schema::create('consommationEnergetiques', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('approvisionnement');
			$table->string('periodicite');
			$table->integer('cout');
			$table->integer('quantite');
			$table->integer('consoClimatisation');
			$table->integer('consoEclairage');
			$table->integer('consoAppareil');
			$table->integer('consoVehicule');
			$table->integer('consoAutre');
		});
	}

	public function down()
	{
		Schema::drop('consommationEnergetiques');
	}
}