<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploisTable extends Migration {

	public function up()
	{
		Schema::create('emplois', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('effectif');
			$table->char('sexe');
			$table->char('permanentTemporaire');
			$table->integer('salaire');
			$table->date('periode');
			$table->integer('tempsTamporaire');
		});
	}

	public function down()
	{
		Schema::drop('emplois');
	}
}