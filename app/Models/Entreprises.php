<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model 
{
    use HasFactory;

    protected $table = 'Entreprises';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = array('minCom', 'Mairie', 'DGI', 'TribunauxAdmin', 'Douane', 'CAPEF_CCIMA', 'AutresFichierAdmin', 'LibelleAutresFichier', 'statutEtablissement', 'quartier_Village', 'pageFacebook', 'autreMotifArretActivite', 'zoneIndustrielle', 'recensement2009', 'recensement2016', 'montantLoyer', 'codeEtablissementRecense', 'inscriptionCGA', 'connaitreAPPME', 'codeFormeJuridique', 'libelleFormeJuridique', 'quartier', 'repere', 'villeLocalite', 'raisonSocialeSiege', 'id_departement', 'sigleSiege', 'id_arrondissement', 'numContribuableSiege', 'numRegistreCommerceSiege', 'quartierSiege', 'repereSiege', 'villeSiege', 'tel1Siege', 'tel2Siege', 'faxSiege', 'emailSiege', 'siteWebSiege', 'zoneFranche');

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