<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeFormaturesTable extends Migration {

	public function up()
	{
		Schema::create('typeFormatures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('typeFormatures');
	}
}