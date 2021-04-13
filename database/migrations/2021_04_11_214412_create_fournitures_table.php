<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFournituresTable extends Migration {

	public function up()
	{
		Schema::create('fournitures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('fournitures');
	}
}