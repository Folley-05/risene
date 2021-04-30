<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolitiqueConnueEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('politiqueConnueEntreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('appreciationPolitique');
		});
	}

	public function down()
	{
		Schema::drop('politiqueConnueEntreprises');
	}
}