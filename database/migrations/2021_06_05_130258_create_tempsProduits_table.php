<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempsProduitsTable extends Migration {

	public function up()
	{
		Schema::create('tempsProduits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('designation');
			$table->integer('code');
			$table->integer('chiffAff');
			$table->decimal('pourcentageChiffAff');
			$table->string('id_entreprise')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tempsProduits');
	}
}