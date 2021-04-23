<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->foreign('id_obstacle')->references('id')->on('obstacles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->foreign('id_politiq_publiq')->references('id')->on('politiquePubliques')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ventilations', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('entreprises')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->foreign('Id_sourceEnergie')->references('id')->on('sourceEnergies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('groupeUsers_MenusApplications', function(Blueprint $table) {
			$table->foreign('id_GroupeUser')->references('id')->on('groupeUsers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('groupeUsers_MenusApplications', function(Blueprint $table) {
			$table->foreign('id_MenusApk')->references('id')->on('menusApplications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('typePollutions_Entreprises', function(Blueprint $table) {
			$table->foreign('id_typePollution')->references('id')->on('typePollutions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('typePollutions_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->dropForeign('obst_Entreprises_id_entreprise_foreign');
		});
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->dropForeign('obst_Entreprises_id_obstacle_foreign');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->dropForeign('politiq_publiq_Entreprises_id_entreprise_foreign');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->dropForeign('politiq_publiq_Entreprises_id_politiq_publiq_foreign');
		});
		Schema::table('ventilations', function(Blueprint $table) {
			$table->dropForeign('ventilations_id_entreprise_foreign');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourceEnergie_Entreprises_id_entreprise_foreign');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourceEnergie_Entreprises_Id_sourceEnergie_foreign');
		});
		Schema::table('groupeUsers_MenusApplications', function(Blueprint $table) {
			$table->dropForeign('groupeUsers_MenusApplications_id_GroupeUser_foreign');
		});
		Schema::table('groupeUsers_MenusApplications', function(Blueprint $table) {
			$table->dropForeign('groupeUsers_MenusApplications_id_MenusApk_foreign');
		});
		Schema::table('typePollutions_Entreprises', function(Blueprint $table) {
			$table->dropForeign('typePollutions_Entreprises_id_typePollution_foreign');
		});
		Schema::table('typePollutions_Entreprises', function(Blueprint $table) {
			$table->dropForeign('typePollutions_Entreprises_id_entreprise_foreign');
		});
	}
}