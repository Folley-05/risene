<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeNommenclaturesTable extends Migration {

	public function up()
	{
		Schema::create('typeNommenclatures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle');
		});
	}

	public function down()
	{
		Schema::drop('typeNommenclatures');
	}
}