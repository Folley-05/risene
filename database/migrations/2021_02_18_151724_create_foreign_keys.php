<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('statut_id')->references('id')->on('Status')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('sourceMJ_id')->references('id')->on('sourceMisejours')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('entreprise_id')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('cascade');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('id_region')->references('code')->on('regions')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('id_departement')->references('code')->on('departements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->foreign('id_arrondissement')->references('code')->on('arrondissements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('obst_Entreprises', function(Blueprint $table) {
			$table->foreign('id_obstacle')->references('id')->on('obstacles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('politiq_publiq_Entreprises', function(Blueprint $table) {
			$table->foreign('id_politiq_publiq')->references('id')->on('politiquePubliques')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ventilations', function(Blueprint $table) {
			$table->foreign('codeRegion')->references('code')->on('regions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->foreign('Id_sourceEnergie')->references('id')->on('sourceEnergies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('originfonds_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('originfonds_Entreprises', function(Blueprint $table) {
			$table->foreign('Id_Originefonds')->references('id')->on('origineFonds')
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
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sourcesMisAjour_Entreprises', function(Blueprint $table) {
			$table->foreign('id_sourcesMisAjour')->references('id')->on('sourceMisejours')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sourcesMisAjour_Entreprises', function(Blueprint $table) {
			$table->foreign('id_entreprise')->references('id')->on('Entreprises')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_statut_id_foreign');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_sourceMJ_id_foreign');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_entreprise_id_foreign');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_id_region_foreign');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_id_departement_foreign');
		});
		Schema::table('Entreprises', function(Blueprint $table) {
			$table->dropForeign('Entreprises_id_arrondissement_foreign');
		});
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
			$table->dropForeign('ventilations_codeRegion_foreign');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourceEnergie_Entreprises_id_entreprise_foreign');
		});
		Schema::table('sourceEnergie_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourceEnergie_Entreprises_Id_sourceEnergie_foreign');
		});
		Schema::table('originfonds_Entreprises', function(Blueprint $table) {
			$table->dropForeign('originfonds_Entreprises_id_entreprise_foreign');
		});
		Schema::table('originfonds_Entreprises', function(Blueprint $table) {
			$table->dropForeign('originfonds_Entreprises_Id_Originefonds_foreign');
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
		Schema::table('sourcesMisAjour_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourcesMisAjour_Entreprises_id_sourcesMisAjour_foreign');
		});
		Schema::table('sourcesMisAjour_Entreprises', function(Blueprint $table) {
			$table->dropForeign('sourcesMisAjour_Entreprises_id_entreprise_foreign');
		});
	}
}