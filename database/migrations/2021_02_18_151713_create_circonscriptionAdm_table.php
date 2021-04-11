<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCirconscriptionAdmTable extends Migration {

	public function up()
	{
		Schema::create('circonscriptionAdm', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('cheflieu');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('circonscriptionAdm');
	}
}