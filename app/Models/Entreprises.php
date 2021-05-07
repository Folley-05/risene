<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model 
{
    use HasFactory;

    protected $table = 'entreprises';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = array('sigle', 'regimeFiscal', 'raisonSociale', 'numContribuable', 'numCNPS', 'numRegistreCommerce', 'numStructure', 'numGps', 'altitude', 'lattitude', 'longitude', 'boitePostale', 'villebp', 'tel1', 'tel2', 'numWha', 'fax', 'siteweb', 'email', 'dateCreation', 'datedemarrage', 'avoirfilialeetranger', 'partcapitaltierce', 'parttierceCapital', 'etrefilialtierce', 'capitalSocial', 'partprivenational', 'partpriveetranger', 'partpubliquenationale', 'partpubliqueetranger', 'tenuecomptaecrte', 'affcabcompta', 'tenuecomptaformelle', 'remplissagedsf', 'chiffaff', 'chiffaffexp', 'valajoute', 'conape', 'avislibreechange', 'conpolitiquepub', 'avisenvironaff', 'avisrelationpubpriv', 'utilordinateur', 'nbreordi', 'nbreinfo', 'intranet', 'internet', 'ecomm', 'mobilmoney', 'protectenv', 'dispositihhse', 'lieuaisanceperso', 'lieuaisanceusager', 'dipositifrecyclage', 'montantsoutraitanceout', 'montantsoutraitancein', 'satisfactionpartenariat', 'quantitedechet', 'etapetraitement', 'dateenreg', 'codeINS', 'statut_id', 'sourceMJ_id', 'entreprise_id', 'CAPEF_CCIMA', 'AutresFichierAdmin', 'LibelleAutresFichier', 'statutEtablissement', 'pageFacebook', 'autreMotifArretActivite', 'zoneIndustrielle', 'recensement2009', 'recensement2016', 'montantLoyer', 'codeEtablissementRecense', 'inscriptionCGA', 'connaitreAPPME', 'codeFormeJuridique', 'libelleFormeJuridique', 'quartier', 'raisonSocialeSiege', 'sigleSiege', 'id_arrondissement', 'numContribuableSiege', 'numRegistreCommerceSiege', 'quartierSiege', 'repereSiege', 'villeSiege', 'tel1Siege', 'tel2Siege', 'faxSiege', 'emailSiege', 'siteWebSiege', 'zoneFranche', 'nomPromoteur', 'agePromoteur', 'sexePromoteur', 'fonctionPromoteur', 'epargne', 'prenomPromoteur', 'nombreAnnees', 'partEpargne', 'fichierAdm', 'numEntrepriseStructure', 'rue', 'etatActivite', 'statutOccupationLocal', 'natureContratLocation', 'caracteristiqueLocal', 'autreNatureContratLocation', 'autreCaracteristiqueLocal', 'organisationProffessionnelle', 'regimeImposition', 'systemedsf', 'activitePrincipale', 'activiteSecondaire', 'effectifHomme', 'effectifFemme', 'effectifTotal', 'statutTraitement', 'statutSuppression', 'dateCessation', 'codeBrancheActiviteSecondaire', 'civilite', 'sexe', 'dateMiseajours', 'etatMiseAJour');
    //protected $fillable = array('sigle', 'sigleSiege', 'numStructure', 'raisonSociale', 'numContribuable', 'numCNPS', 'minCom', 'Mairie', 'DGI', 'TribunauxAdmin', 'Douane', 'CAPEF_CCIMA', 'AutresFichierAdmin', 'LibelleAutresFichier', 'statutEtablissement', 'quartier_Village', 'pageFacebook', 'autreMotifArretActivite', 'zoneIndustrielle', 'recensement2009', 'recensement2016', 'montantLoyer', 'codeEtablissementRecense', 'inscriptionCGA', 'connaitreAPPME', 'codeFormeJuridique', 'libelleFormeJuridique', 'quartier', 'repere', 'villeLocalite', 'raisonSocialeSiege', 'id_departement', 'sigleSiege', 'id_arrondissement', 'numContribuableSiege', 'numRegistreCommerceSiege', 'quartierSiege', 'repereSiege', 'villeSiege', 'tel1Siege', 'tel2Siege', 'faxSiege', 'emailSiege', 'siteWebSiege', 'zoneFranche', 'partpriveetranger', 'valajoute', 'chiffaffexp', 'effectifPermanent', 'statutTraitement', 'regimeFiscal', 'codeINS');

    public function groupe()
    {
        return $this->hasOne('App\Models\Groupes', 'groupe_id');
    }

    public function catImpotLiberatoire()
    {
        return $this->hasOne('App\Models\CatImpotLiberatoires', 'catImpotLiberatoire_id');
    }

    public function sourceMiseAJour()
    {
        return $this->hasMany('App\Models\SourceMisejours');
    }

    public function systemeDsf()
    {
        return $this->hasMany('App/Models\SystemeDsfs');
    }

    public function typePollution()
    {
        return $this->hasMany('App\Models\TypePollutions');
    }

    public function catJuridique()
    {
        return $this->belongsTo('App\Models\CatJuridiques', 'id_catJuridique');
    }

    public function panneauSolaire()
    {
        return $this->hasMany('App\Models\PanneauSolaires');
    }

    public function regimeImpots()
    {
        return $this->hasOne('App\Models\RegimeImpots', 'id_regimeImpot');
    }

    public function coutFourniture()
    {
        return $this->hasMany('App\Models\CoutFournitures');
    }

    public function obstacles()
    {
        return $this->hasMany('App\Models\Obstacles');
    }

    public function politiquePublique()
    {
        return $this->hasMany('App\Models\PolitiquePubliques');
    }

    public function sourceEnergie()
    {
        return $this->hasMany('App\Models\SourceEnergies');
    }

    public function traitementDechets()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

    public function ventesProduits()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

    public function natureContratLocation()
    {
        return $this->hasMany('App\Models\NatureContratLocations');
    }

    public function etatActivites()
    {
        return $this->hasOne('App\Models\EtatActivites');
    }

    public function natureCreate()
    {
        return $this->hasOne('App\Models\NatureCreation');
    }

    public function circonscriptionAdmin()
    {
        return $this->hasOne('App\Models\CirconscriptionAdm', 'id_circonscriptionAdmin');
    }

    public function emplois()
    {
        return $this->hasMany('App\Models\Emplois');
    }

    public function origineFonds()
    {
        return $this->hasMany('App\Models\OrigineFonds');
    }

    public function centreImpots()
    {
        return $this->hasOne('App\Models\CentreImpot', 'id_centreImpot');
    }

    public function activites()
    {
        return $this->hasMany('App\Models\Activites');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status');
    }

    public function organisationProfessionnelle()
    {
        return $this->belongsTo('App\Models\OrganisationProfessionnelle', 'id_organisationProfessionnel');
    }

    public function ventilations()
    {
        return $this->hasMany('App\Models\Ventilations');
    }

    public function arrondissement()
    {
        return $this->hasOne('App\Models\Entreprises', 'id_arrondissement');
    }

    public function departement()
    {
        return $this->belongsTo('App\Models\Departements', 'id_departement');
    }

    public function regions()
    {
        return $this->belongsTo('App\Models\Regions', 'id_region');
    }

    public function motifArretEntreprise()
    {
        return $this->hasMany('App\Models\MotifArretActivites');
    }

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}