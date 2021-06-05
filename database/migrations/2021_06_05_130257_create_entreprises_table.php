<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('raisonSociale');
			$table->string('numContribuable');
			$table->string('numCNPS')->nullable();
			$table->string('numRegistreCommerce')->nullable();
			$table->string('numGps')->nullable();
			$table->float('altitude')->nullable();
			$table->float('lattitude')->nullable();
			$table->float('longitude')->nullable();
			$table->string('boitePostale')->nullable();
			$table->string('villebp')->nullable();
			$table->string('tel1')->nullable();
			$table->string('tel2')->nullable();
			$table->string('numWha')->nullable();
			$table->string('fax')->nullable();
			$table->string('siteweb')->nullable();
			$table->string('email')->nullable();
			$table->date('dateCreation')->nullable();
			$table->date('datedemarrage')->nullable();
			$table->integer('capitalSocial')->nullable();
			$table->integer('partprivenational')->nullable();
			$table->integer('partpriveetranger')->nullable();
			$table->integer('partpubliquenationale')->nullable();
			$table->integer('partpubliqueetranger')->nullable();
			$table->integer('chiffaff')->nullable();
			$table->integer('chiffaffexp')->nullable();
			$table->boolean('utilordinateur')->nullable();
			$table->integer('nbreordi')->nullable();
			$table->integer('nbreinfo')->nullable();
			$table->boolean('intranet')->nullable();
			$table->boolean('internet')->nullable();
			$table->date('dateenreg')->nullable();
			$table->string('codeINS')->nullable();
			$table->integer('CAPEF_CCIMA')->nullable();
			$table->string('pageFacebook')->nullable();
			$table->string('codeFormeJuridique')->nullable();
			$table->string('libelleFormeJuridique')->nullable();
			$table->string('quartier')->nullable();
			$table->integer('id_arrondissement')->unsigned()->nullable();
			$table->string('nomPromoteur')->nullable();
			$table->integer('agePromoteur')->nullable();
			$table->string('sexePromoteur')->nullable();
			$table->string('fonctionPromoteur')->nullable();
			$table->string('prenomPromoteur')->nullable();
			$table->integer('nombreAnnees')->nullable();
			$table->integer('etatActivite')->unsigned()->nullable();
			$table->integer('motifArret')->unsigned()->nullable();
			$table->integer('natureCreation')->unsigned()->nullable();
			$table->integer('originesFonds')->unsigned()->nullable();
			$table->integer('statutOccupationLocal')->unsigned()->nullable();
			$table->integer('natureContratLocation')->unsigned()->nullable();
			$table->integer('caracteristiqueLocal')->unsigned()->nullable();
			$table->integer('organisationProffessionnelle')->unsigned()->nullable();
			$table->integer('regimeImposition')->unsigned()->nullable();
			$table->integer('nombreEtablissement')->nullable();
			$table->integer('catImpot')->unsigned()->nullable();
			$table->integer('systemedsf')->unsigned()->nullable();
			$table->integer('activitePrincipale');
			$table->text('activiteSecondaire')->nullable();
			$table->integer('effectifHomme')->nullable();
			$table->integer('effectifFemme')->nullable();
			$table->string('effectifTotal')->nullable();
			$table->string('departement')->nullable();
			$table->integer('region')->unsigned()->nullable();
			$table->string('affilieOrganisationProffessionnelle')->nullable();
			$table->string('villeImplantation')->nullable();
			$table->string('promoteurPrincipalDirigeant')->nullable();
			$table->string('villeRegistreCommerce')->nullable();
			$table->boolean('statutTraitement')->nullable();
			$table->string('regimeFiscal')->nullable();
			$table->boolean('statutSuppression')->nullable();
			$table->string('natureBenefices')->nullable();
			$table->string('effectifPermanent')->nullable();
			$table->string('typeEntreprise')->nullable();
			$table->string('situationExportation')->nullable();
			$table->string('annees')->nullable();
			$table->string('brancheActivitePrincipale');
			$table->string('sigle');
			$table->string('brancheActiviteSecondaire')->nullable();
			$table->integer('codeBrancheActivitePrincipale');
			$table->string('dateCessation')->nullable();
			$table->integer('codeBrancheActiviteSecondaire')->nullable();
			$table->string('civilite')->nullable();
			$table->string('sexe')->nullable();
			$table->string('dateMiseajours')->nullable();
			$table->boolean('etatMiseAJour')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('entreprises');
	}
}