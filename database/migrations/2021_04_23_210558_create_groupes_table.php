<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupesTable extends Migration {

	public function up()
	{
		Schema::create('groupes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('groupes');
	}
}