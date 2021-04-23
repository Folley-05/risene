<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollutionMaitrisesTable extends Migration {

	public function up()
	{
		Schema::create('pollutionMaitrises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pollutionMaitrises');
	}
}