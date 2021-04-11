<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypePollutionsTable extends Migration {

	public function up()
	{
		Schema::create('typePollutions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('institule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('typePollutions');
	}
}