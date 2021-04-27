<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSourceEnergiesTable extends Migration {

	public function up()
	{
		Schema::create('sourceEnergies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('uniteMesure');
		});
	}

	public function down()
	{
		Schema::drop('sourceEnergies');
	}
}