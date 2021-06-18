<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiplomesTable extends Migration {

	public function up()
	{
		Schema::create('diplomes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('diplomes');
	}
}