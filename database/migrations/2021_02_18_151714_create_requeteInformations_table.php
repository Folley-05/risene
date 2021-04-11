<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequeteInformationsTable extends Migration {

	public function up()
	{
		Schema::create('requeteInformations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('objet');
			$table->string('etat');
			$table->date('dateRequete');
			$table->boolean('validation');
		});
	}

	public function down()
	{
		Schema::drop('requeteInformations');
	}
}