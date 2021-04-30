<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTraitementDechetsTable extends Migration {

	public function up()
	{
		Schema::create('traitementDechets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
		});
	}

	public function down()
	{
		Schema::drop('traitementDechets');
	}
}