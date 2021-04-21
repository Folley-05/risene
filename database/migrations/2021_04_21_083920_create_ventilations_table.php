<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentilationsTable extends Migration {

	public function up()
	{
		Schema::table('ventilations', function(Blueprint $table) {
			$table->integer('id_entreprise')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ventilations');
	}
}