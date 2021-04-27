<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSourceMisejoursTable extends Migration {

	public function up()
	{
		Schema::create('sourceMisejours', function(Blueprint $table) {
			$table->timestamps();
			$table->string('source');
			$table->integer('code')->primary();
		});
	}

	public function down()
	{
		Schema::drop('sourceMisejours');
	}
}