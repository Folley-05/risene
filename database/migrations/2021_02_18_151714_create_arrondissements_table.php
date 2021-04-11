<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArrondissementsTable extends Migration {

	public function up()
	{
		Schema::create('arrondissements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('code')->unique();
			$table->string('libelle');
		});
	}

	public function down()
	{
		Schema::drop('arrondissements');
	}
}