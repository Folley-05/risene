<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrigineFondsTable extends Migration {

	public function up()
	{
		Schema::create('origineFonds', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('origineFonds');
	}
}