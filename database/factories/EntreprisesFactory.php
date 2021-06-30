<?php

namespace Database\Factories;

use App\Models\Entreprises;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntreprisesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprises::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'id'=>$this->faker->unique()->numberBetween($min = 1, $max = 100),
			'raisonSociale'=>$this->faker->lastName,
			'numContribuable'=>$this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
			'secteur'=>$this->faker->randomElement($array = array ('SECTEUR PUBLIQUE', 'SECTEUR PARAPUBLIQUE', 'SECTEUR PRIVE')),
			'numCNPS'=>$this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
			'numBordereau'=>$this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
			'numRegistreCommerce'=>$this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
			'numGps'=>$this->faker->numberBetween($min = 10, $max = 100),
			'altitude'=>$this->faker->numberBetween($min = 10, $max = 100),
			'lattitude'=>$this->faker->numberBetween($min = 10, $max = 100),
			'longitude'=>$this->faker->numberBetween($min = 10, $max = 100),
			'boitePostale'=>$this->faker->buildingNumber,
			'villebp'=>$this->faker->city,
			'tel1'=>$this->faker->numberBetween($min = 100000, $max = 300000),
			'tel2'=>$this->faker->numberBetween($min = 100000, $max = 300000),
			'numWha'=>$this->faker->numberBetween($min = 100000, $max = 300000),
			'fax'=>$this->faker->numberBetween($min = 100000, $max = 300000),
			'siteweb'=>$this->faker->url,
			'email'=>$this->faker->email,
			'dateCreation'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
			'datedemarrage'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
			'capitalSocial'=>$this->faker->numberBetween($min = 1000, $max = 1000000), 
			'partprivenational'=>$this->faker->numberBetween($min = 0, $max = 1),
			'partpriveetranger'=>$this->faker->numberBetween($min = 0, $max = 1),
			'partpubliquenationale'=>$this->faker->numberBetween($min = 0, $max = 1),
			'partpubliqueetranger'=>$this->faker->numberBetween($min = 0, $max = 1),
			'chiffaff'=>$this->faker->numberBetween($min = 10000000, $max = 1000000),
			'chiffaffexp'=>$this->faker->numberBetween($min = 10000000, $max = 1000000),
			'utilordinateur'=>$this->faker->boolean,
			'nbreordi'=>$this->faker->numberBetween($min = 10, $max = 300),
			'nbreinfo'=>$this->faker->numberBetween($min = 1, $max = 30),
			'intranet'=>$this->faker->boolean,
			'internet'=>$this->faker->boolean,
			'dateenreg'=>$this->faker->numberBetween($min = 2018, $max = 2021),
			'codeINS'=>$this->faker->numberBetween($min = 1000, $max = 2999999),
			'CAPEF_CCIMA'=>$this->faker->numberBetween($min = 1000, $max = 300000),
			'pageFacebook'=>$this->faker->freeEmail,
			'codeFormeJuridique'=>$this->faker->lastName,
			'libelleFormeJuridique'=>$this->faker->lastName,
			'quartier'=>$this->faker->lastName,
			'arrondissement'=>$this->faker->numberBetween($min = 1, $max = 256),
			'nomPromoteur'=>$this->faker->name,
			'agePromoteur'=>$this->faker->numberBetween($min = 20, $max = 70),
			'sexePromoteur'=>$this->faker->randomElement($array = array ('masculin','feminin')),
			'fonctionPromoteur'=>$this->faker->lastName,
			'prenomPromoteur'=>$this->faker->lastName,
			'nombreAnnees'=>$this->faker->numberBetween($min = 1, $max = 30),
			'etatActivite'=>$this->faker->numberBetween($min = 1, $max = 3),
			'motifArret'=>$this->faker->numberBetween($min = 1, $max = 3),
			'natureCreation'=>$this->faker->numberBetween($min = 1, $max = 3),
			'originesFonds'=>$this->faker->numberBetween($min = 1, $max = 3),
			'statutOccupationLocal'=>$this->faker->numberBetween($min = 1, $max = 3),
			'natureContratLocation'=>$this->faker->numberBetween($min = 1, $max = 3),
			'caracteristiqueLocal'=>$this->faker->numberBetween($min = 1, $max = 3),
			'organisationProffessionnelle'=>$this->faker->numberBetween($min = 1, $max = 3),
			'regimeImposition'=>$this->faker->numberBetween($min = 1, $max = 3),
			'nombreEtablissement'=>$this->faker->numberBetween($min = 1, $max = 300),
			'catImpot'=>$this->faker->numberBetween($min = 1, $max = 3),
			'systemedsf'=>$this->faker->numberBetween($min = 1, $max = 3),
			'anneeDsf'=>$this->faker->numberBetween($min = 2018, $max = 2021),
			'effectifHomme'=>$this->faker->numberBetween($min = 1, $max = 3000),
			'effectifFemme'=>$this->faker->numberBetween($min = 1, $max = 3000),
			'effectifTotal'=>$this->faker->numberBetween($min = 1, $max = 3000),
			'departement'=>$this->faker->randomDigit,
			'region'=>$this->faker->randomDigit,
			'affilieOrganisationProffessionnelle'=>$this->faker->sentence(),
			'villeImplantation'=>$this->faker->lastName,
			'promoteurPrincipalDirigeant'=>$this->faker->lastName,
			'villeRegistreCommerce'=>$this->faker->lastName,
			'statutTraitement'=>false,
			'regimeFiscal'=>$this->faker->randomDigit,
			'statutSuppression'=>$this->faker->boolean,
			'natureBenefices'=>$this->faker->sentence(),
			'effectifPermanent'=>$this->faker->numberBetween($min = 1, $max = 1000),
			'typeEntreprise'=>$this->faker->sentence(),
			'situationExportation'=>$this->faker->sentence(),
			'annee'=>$this->faker->numberBetween($min = 2018, $max = 2021),
			'sigle'=>$this->faker->lastName,
			'codeActivitePrincipale'=>$this->faker->numberBetween($min = 1, $max = 30),
			'libelleActivitePrincipale'=>$this->faker->sentence(),
			'codeActiviteSecondaire'=>$this->faker->numberBetween($min = 1, $max = 30),
			'libelleActiviteSecondaire'=>$this->faker->sentence(),
			'brancheActivitePrincipale'=>$this->faker->sentence(),
			'brancheActiviteSecondaire'=>$this->faker->sentence(),
			'codeBrancheActivitePrincipale'=>$this->faker->numberBetween($min = 1, $max = 30),
			'codeBrancheActiviteSecondaire'=>$this->faker->numberBetween($min = 1, $max = 30),
			'dateCessation'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
			'civilite'=>$this->faker->lastName,
			'sexe'=>$this->faker->randomElement($array = array ('masculin','feminin')),
			'sourceMiseAJour'=>$this->faker->numberBetween($min = 1, $max = 10),
			'dateMiseajours'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
			'etatMiseAJour'=>false,
        ];
    }
}
