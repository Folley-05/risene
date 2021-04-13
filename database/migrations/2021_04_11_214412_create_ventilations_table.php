<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentilationsTable extends Migration {

	public function up()
	{
		Schema::create('ventilations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('code')->unique();
			$table->string('nomEtablissement');
			$table->string('codeRegion');
			$table->string('ville');
			$table->string('quartier');
		});
	}

	public function down()
	{
		Schema::drop('ventilations');
	}
}