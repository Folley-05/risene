<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOriginfondsEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('originfonds_Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_entreprise')->unsigned();
			$table->integer('Id_Originefonds')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('originfonds_Entreprises');
	}
}