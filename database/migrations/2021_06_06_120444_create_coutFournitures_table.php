<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoutFournituresTable extends Migration {

	public function up()
	{
		Schema::create('coutFournitures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('valeur');
		});
	}

	public function down()
	{
		Schema::drop('coutFournitures');
	}
}