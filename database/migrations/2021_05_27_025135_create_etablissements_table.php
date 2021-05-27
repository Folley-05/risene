<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtablissementsTable extends Migration {

	public function up()
	{
		Schema::create('etablissements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('region')->nullable();
			$table->string('ville');
			$table->string('quartier');
			$table->string('id_entreprise');
			$table->string('codeIns')->nullable();
			$table->string('sigle')->nullable();
			$table->string('departement')->nullable();
			$table->string('arrondissements')->nullable();
			$table->string('boitePostale')->nullable();
			$table->string('villeImplantation')->nullable();
			$table->string('rue')->nullable();
			$table->integer('latitude')->nullable();
			$table->integer('longitude')->nullable();
			$table->integer('altitude')->nullable();
			$table->string('tel1')->nullable();
			$table->string('tel2')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->integer('chiffAffHT')->nullable();
			$table->smallInteger('effectifPermanent')->nullable();
			$table->string('situationExportation')->nullable();
			$table->integer('chiffAffExp')->nullable();
			$table->date('dateCreationAdmin')->nullable();
			$table->date('dateDebutActivites')->nullable();
			$table->string('dateCessation')->nullable();
			$table->smallInteger('anneeDsf')->nullable();
			$table->string('statut')->nullable();
			$table->string('dateMiseajours')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('etablissements');
	}
}