<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisationProfessionnellesTable extends Migration {

	public function up()
	{
		Schema::create('organisationProfessionnelles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('organisationProfessionnelles');
	}
}