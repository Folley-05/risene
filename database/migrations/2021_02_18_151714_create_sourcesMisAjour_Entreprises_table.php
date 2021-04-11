<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSourcesMisAjourEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('sourcesMisAjour_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_sourcesMisAjour')->unsigned();
			$table->integer('id_entreprise')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sourcesMisAjour_Entreprises');
	}
}