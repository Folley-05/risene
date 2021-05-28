<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSecteurActivitesTable extends Migration {

	public function up()
	{
		Schema::create('secteurActivites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle')->nullable();
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('secteurActivites');
	}
}