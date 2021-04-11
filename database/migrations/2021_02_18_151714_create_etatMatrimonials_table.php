<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtatMatrimonialsTable extends Migration {

	public function up()
	{
		Schema::create('etatMatrimonials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('etat');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('etatMatrimonials');
	}
}