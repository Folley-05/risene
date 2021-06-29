<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormeJuridiquesTable extends Migration {

	public function up()
	{
		Schema::create('formeJuridiques', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('formeJuridiques');
	}
}