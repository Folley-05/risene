<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCentreImpotsTable extends Migration {

	public function up()
	{
		Schema::create('centreImpots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('code');
			$table->string('institule');
			$table->string('localite');
		});
	}

	public function down()
	{
		Schema::drop('centreImpots');
	}
}