<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolitiqPubliqEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_entreprise')->unsigned();
			$table->integer('id_politiq_publiq')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('politiq_publiq_Entreprises');
	}
}