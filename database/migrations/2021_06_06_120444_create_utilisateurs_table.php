<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateursTable extends Migration {

	public function up()
	{
		Schema::create('utilisateurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('login');
			$table->string('motPass');
			$table->date('dateCreation');
			$table->date('dateDerniereVisite');
			$table->string('email');
			$table->string('activation');
			$table->string('nom');
		});
	}

	public function down()
	{
		Schema::drop('utilisateurs');
	}
}