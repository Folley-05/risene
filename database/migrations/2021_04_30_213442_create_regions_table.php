<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionsTable extends Migration {

	public function up()
	{
		Schema::create('regions', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->string('code')->unique();
			$table->string('libelle');
		});
	}

	public function down()
	{
		Schema::drop('regions');
	}
}