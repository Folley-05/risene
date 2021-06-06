<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusApplicationsTable extends Migration {

	public function up()
	{
		Schema::create('menusApplications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('icone');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('menusApplications');
	}
}