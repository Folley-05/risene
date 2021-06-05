<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementsTable extends Migration {

	public function up()
	{
		Schema::create('departements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('code')->unique();
			$table->string('libelle');
			$table->string('region');
		});
	}

	public function down()
	{
		Schema::drop('departements');
	}
}