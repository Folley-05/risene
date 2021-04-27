<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromoteursTable extends Migration {

	public function up()
	{
		Schema::create('promoteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->char('sexe');
			$table->integer('age');
			$table->integer('nombreAnneewService');
			$table->string('fonction');
			$table->string('nom');
			$table->string('prenom');
		});
	}

	public function down()
	{
		Schema::drop('promoteurs');
	}
}