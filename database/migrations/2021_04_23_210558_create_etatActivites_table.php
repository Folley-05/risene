<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtatActivitesTable extends Migration {

	public function up()
	{
		Schema::create('etatActivites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('etat');
			$table->integer('code')->unique();
		});
	}

	public function down()
	{
		Schema::drop('etatActivites');
	}
}