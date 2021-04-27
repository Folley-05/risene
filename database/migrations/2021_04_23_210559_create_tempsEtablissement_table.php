<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempsEtablissementTable extends Migration {

	public function up()
	{
		Schema::create('tempsEtablissement', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('codeRegion');
			$table->string('ville');
			$table->string('quartier');
			$table->string('id_entreprise');
		});
	}

	public function down()
	{
		Schema::drop('tempsEtablissement');
	}
}