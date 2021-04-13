<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatJuridiquesTable extends Migration {

	public function up()
	{
		Schema::create('catJuridiques', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('institule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('catJuridiques');
	}
}