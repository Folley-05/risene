<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristiqueLocalsTable extends Migration {

	public function up()
	{
		Schema::create('caracteristiqueLocals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('caracteristiqueLocals');
	}
}