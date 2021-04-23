<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatImpotLiberatoiresTable extends Migration {

	public function up()
	{
		Schema::create('catImpotLiberatoires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('intitule');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('catImpotLiberatoires');
	}
}