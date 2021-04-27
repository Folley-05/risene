<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupeUsersMenusApplicationsTable extends Migration {

	public function up()
	{
		Schema::create('groupeUsers_MenusApplications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_GroupeUser')->unsigned();
			$table->integer('id_MenusApk')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('groupeUsers_MenusApplications');
	}
}