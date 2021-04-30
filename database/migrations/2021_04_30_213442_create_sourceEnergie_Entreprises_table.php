<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSourceEnergieEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_entreprise')->unsigned();
			$table->integer('Id_sourceEnergie')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sourceEnergie_Entreprises');
	}
}