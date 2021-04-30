<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupeUsersTable extends Migration {

	public function up()
	{
		Schema::create('groupeUsers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('groupeUsers');
	}
}