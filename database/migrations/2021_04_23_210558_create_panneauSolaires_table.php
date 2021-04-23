<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePanneauSolairesTable extends Migration {

	public function up()
	{
		Schema::create('panneauSolaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('surface');
			$table->integer('puissance');
		});
	}

	public function down()
	{
		Schema::drop('panneauSolaires');
	}
}