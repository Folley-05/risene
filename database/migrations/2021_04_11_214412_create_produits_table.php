<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration {

	public function up()
	{
		Schema::create('produits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
			$table->integer('code');
			$table->integer('chiffreAffaire');
			$table->string('id_entreprise');
			$table->decimal('pourcentageChiffAff');
		});
	}

	public function down()
	{
		Schema::drop('produits');
	}
}