<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusTable extends Migration {

	public function up()
	{
		Schema::create('Status', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->integer('code')->unique();
		});
	}

	public function down()
	{
		Schema::drop('Status');
	}
}