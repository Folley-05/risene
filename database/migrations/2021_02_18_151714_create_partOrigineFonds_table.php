<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartOrigineFondsTable extends Migration {

	public function up()
	{
		Schema::create('partOrigineFonds', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('valeur');
		});
	}

	public function down()
	{
		Schema::drop('partOrigineFonds');
	}
}