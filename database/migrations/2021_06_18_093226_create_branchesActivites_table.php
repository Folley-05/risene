<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchesActivitesTable extends Migration {

	public function up()
	{
		Schema::create('branchesActivites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('code');
			$table->string('libelle');
			$table->integer('secteur');
		});
	}

	public function down()
	{
		Schema::drop('branchesActivites');
	}
}