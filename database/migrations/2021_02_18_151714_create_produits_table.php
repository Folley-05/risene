<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration {

	public function up()
	{
		Schema::create('produits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('designation');
			$table->integer('code');
		});
	}

	public function down()
	{
		Schema::drop('produits');
	}
}