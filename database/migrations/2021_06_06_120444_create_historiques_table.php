<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriquesTable extends Migration {

	public function up()
	{
		Schema::create('historiques', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('action');
			$table->string('objet');
			$table->date('date');
			$table->string('variables');
			$table->string('valeurs');
		});
	}

	public function down()
	{
		Schema::drop('historiques');
	}
}