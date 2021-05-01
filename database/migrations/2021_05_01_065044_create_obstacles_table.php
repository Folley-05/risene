<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObstaclesTable extends Migration {

	public function up()
	{
		Schema::create('obstacles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('obstacles');
	}
}