<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolitiquePubliquesTable extends Migration {

	public function up()
	{
		Schema::create('politiquePubliques', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('politiquePubliques');
	}
}