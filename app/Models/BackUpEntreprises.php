<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BackUpEntreprises extends Model 
{

    protected $table = 'backupentreprises';
    //public $timestamps = true;
    protected $fillable = array('raisonSociale', 'numContribuable', 'numCNPS', 'numRegistreCommerce', 'secteur', 'numGps', 'altitude', 'lattitude', 'longitude', 'pointRepere', 'boitePostale', 'villebp', 'tel1', 'tel2', 'numWha', 'fax', 'siteweb', 'email', 'dateCreation', 'datedemarrage', 'capitalSocial', 'partprivenational', 'partpriveetranger', 'partpubliquenationale', 'partpubliqueetranger', 'chiffaff', 'chiffaffexp', 'utilordinateur', 'nbreordi', 'nbreinfo', 'intranet', 'internet', 'dateenreg', 'codeINS', 'CAPEF_CCIMA', 'pageFacebook', 'codeFormeJuridique', 'libelleFormeJuridique', 'quartier', 'arrondissement', 'nomPromoteur', 'agePromoteur', 'sexePromoteur', 'fonctionPromoteur', 'prenomPromoteur', 'nombreAnnees', 'annee','secteurActivites','remplissageDsf', 'etatActivite', 'statutOccupationLocal', 'natureContratLocation', 'caracteristiqueLocal', 'organisationProffessionnelle', 'regimeImposition', 'catImpot', 'systemedsf', 'codeActiviteSecondaire', 'activitePrincipale', 'activiteSecondaire', 'effectifHomme', 'effectifFemme', 'effectifTotal', 'affilieOrganisationProffessionnelle', 'villeImplantation', 'region', 'departement', 'promoteurPrincipalDirigeant', 'villeRegistreCommerce', 'statutTraitement', 'regimeFiscal', 'statutSuppression', 'natureBenefices', 'situationExportation','codeActivitePrincipale','libelleActivitePrincipale', 'annees', 'typeEntreprise', 'brancheActivitePrincipale', 'sigle', 'codeBrancheActivitePrincipale', 'dateCessation', 'codeBrancheActiviteSecondaire', 'civilite', 'sexe','datecapitalsociale','datechiffaff','datechiffexp','dateeffectiftotal', 'dateMiseajours', 'etatMiseAJour',);


}