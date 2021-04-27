<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemeDsfsTable extends Migration {

	public function up()
	{
		Schema::create('systemeDsfs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('systemeDsfs');
	}
}