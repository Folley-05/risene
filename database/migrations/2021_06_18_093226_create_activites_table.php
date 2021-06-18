<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitesTable extends Migration {

	public function up()
	{
		Schema::create('activites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule')->nullable();
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('activites');
	}
}
