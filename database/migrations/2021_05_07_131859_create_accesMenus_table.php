<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccesMenusTable extends Migration {

	public function up()
	{
		Schema::create('accesMenus', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('role');
		});
	}

	public function down()
	{
		Schema::drop('accesMenus');
	}
}