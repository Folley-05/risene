<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypePollutionsEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('typePollutions_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_typePollution')->unsigned();
			$table->integer('id_entreprise')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('typePollutions_Entreprises');
	}
}