<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprises;
use App\Models\BackUpEntreprises;
use App\Models\Arrondissements;
use App\Models\Departements;
use App\Models\Regions;
use App\Models\SecteurActivites;
// use App\Models\BackUpEntreprises;
// use App\Models\BackUpEntreprises;
// use App\Models\BackUpEntreprises;

class EntreprisesController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Entreprises::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return Entreprises::orderByDesc('created_at')->get();
	}

	/**
	 * Display a listing of active ressource.
	 *
	 * @return Response
	 */
	public function active()
	{
		return Entreprises::where('statutSuppression', null)->get();
	}

	/**
	 * Display a listing of sort ressource.
	 *
	 * @return Response
	 */
	public function sortEntreprises(Request $request)
	{
		$request->validate([
			'field'=>'required',
			'order'=>'required',
		]);
		if($request->order==='DESC')
			return Entreprises::orderByDesc($request->field)->get();
		else
			return Entreprises::orderBy($request->field)->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $requete)
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//return now()->year;
		$validate=$request->validate([
			'raisonSociale'=>'required',
			'numContribuable'=>'required|unique:entreprises,numContribuable',
			'sigle'=>'required|unique:entreprises,sigle',
			'codeActivitePrincipale'=>'required',
			'libelleActivitePrincipale'=>'required',
			'codeBrancheActivitePrincipale'=>'required',
			'libelleFormeJuridique'=>'required',
			'brancheActivitePrincipale'=>'required',
			'codeINS'=>'prohibited',
			'statutTraitement'=>'prohibited',
			'etatMiseAJour'=>'prohibited',
		]);
		$request->merge([
			'statutTraitement'=>false,
			'etatMiseAJour'=>false,
			'annee'=>now()->year,
		]);
		if($validate) {
			if(Entreprises::create($request->all())) {
				return response()->json([
					'succes'=>"entreprise en attente de validation",
					//'codeIns'=>$request->codeIns,
				], 200);
			}
			else {
				return response()->json([
					'echec'=>"entreprise non cree",
				], 500);
			}
		}
		//return $request;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		$entreprise=Entreprises::where('id', $request->id)->get();
		if(count($entreprise))
			return $entreprise[0];
		else
			return response()->json([
				'echec'=>"l'entreprise n'existe pas",
			], 500);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Entreprises $id)
	{
		$validate=$request->validate([
			// 'id'=>'prohibited',
			// 'sigleSiege'=>'prohibited',
			// 'raisonSociale'=>'prohibited',
			// 'numContribuable'=>'prohibited',
			// 'brancheActivitePrincipale'=>'prohibited',
			// 'codeBrancheActivitePrincipale'=>'prohibited',
			'annee'=>'prohibited',
			// 'sigle'=>'prohibited',
			'codeINS'=>'prohibited',
			'statutTraitement'=>'prohibited',
			'numCNPS'=>'unique:Entreprises,numCNPS'
		]);
		$request->merge([
			'dateMiseajours'=>now()
		]);
		$result=Entreprises::where('id', $id->id)->get();
		/*
			if(!$result[0]->etatMiseAJour) 
				return response()->json([
					'echec'=>"vous ne pouvez pas mettre a jour une entreprise sans donnees",
				], 500);
		*/

		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise mise a jour",
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec de la mise a jour",
			], 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Entreprises $id)
	{
		return response().json([
			"attends"=> "la route ci derange"
		], 200);
	}

	public function del(Request $request, Entreprises $id) 
	{
		$params=[
			'statutSuppression'=>true
		];
		if($id->update($params)) {
			return response()->json([
				'success'=>"entreprise supprime",
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec de la suppression",
			], 500);
		}
	}
	
	public function add(Request $request) {
		return "a coder";
	}
	
	public function full(Request $request, Entreprises $id) {
		$result=Entreprises::where('id', $id->id)->get();
		if(!$result[0]->statutTraitement){ 
			return response()->json([
				'echec'=>"vous ne pouvez pas remplir cette entreprise car elle n'a pas ete valide",
			], 500);
		}
		if($result[0]->etatMiseAJour){ 
			return response()->json([
				'echec'=>"vous ne pouvez pas remplir cette entreprise essayez une mise a jour",
			], 500);
		}
		$validate=$request->validate([
			'id'=>'prohibited',
			'sigleSiege'=>'prohibited',
			'raisonSociale'=>'prohibited',
			'numContribuable'=>'prohibited',
			'brancheActivitePrincipale'=>'prohibited',
			'codeBrancheActivitePrincipale'=>'prohibited',
			'annee'=>'prohibited',
			'sigle'=>'prohibited',
			'codeINS'=>'prohibited',
			'statutTraitement'=>'prohibited',
			'etatMiseAJour'=>'prohibited'
		]);
		$request->merge([
			'etatMiseAJour'=>true,
			'dateMiseajours'=>now()
		]);
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise remplie",
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec",
			], 500);
		}
		
	}

	public function valid(Request $request, Entreprises $id) {
		$entreprise=$id;
		//return $entreprise['libelleFormeJuridique'];
		$entreprise['libelleFormeJuridique']==="SECTEUR PUBLIC" ? ($result=Entreprises::where('statutTraitement', true)->where('libelleFormeJuridique', 'SECTEUR PUBLIC')->where('codeINS', '<>', null)->orderByDesc('codeINS')->take(2)->get()) 
			:	($result=Entreprises::where('statutTraitement', true)->where('libelleFormeJuridique','<>', 'SECTEUR PUBLIC')->where('codeINS', '<>', null)->orderByDesc('codeINS')->take(2)->get());
		if(count($result)){
			$ins=genererCode($result[0]->codeINS, $entreprise['libelleFormeJuridique']);
		}
		else {
			$ins=genererCode("", $entreprise['libelleFormeJuridique']);
		}
		//return $ins;
		$request->merge([
			'codeINS'=>$ins,
			'statutTraitement'=>true,

		]);
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise valide",
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec de la validation",
			], 500);
		}
	}

	public function waiting() {
		return Entreprises::where('statutTraitement', false)->get();
	}
	public function updated() {
		return Entreprises::where('etatMiseAJour', true)->get();
	}

	public function wait(Entreprises $id) {
		return $id;
	}

	public function sort(Request $request) {
		return Entreprises::where('region', '')->get();
	}

	/**
	 * insert from file function.
	 *
	 * @return Response
	 */
	public function import(Request $request) {
		$validate=$request->validate([
			'file'=>'required|mimes:csv,txt'
		]);
		$n=0;
		$error="les entreprises ";
		$entreprises=[];
		$data=convertCsvToArray($request->file, ',');
		for($i=0; $i<count($data); $i++) {
			$entreprise=buildEntreprise($data[$i]);
			$witness=storeEntreprise($entreprise);
			if($witness) $n++;
			else $error=$error."".$entreprise['raisonSociale'].', ';
			$entreprises[$i]=$entreprise;

		}
		//return $data;
		return response()->json([
			'succes'=>$n." entreprises ont ete inserees",
			'error'=>$error."n'ont pas ete inserees",
		], 200);
		//return Departements::where('libelle', $data[0]['DEPARTEMENT'])->get();
	}

	/**
	 * Put all Entreprise on BackUp.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function backUp() {
		$entreprises=Entreprises::all()->toArray();
		$witness=true;
		$array=(array)$entreprises[0];
		foreach ($entreprises as $entreprise) {
			if(BackUpEntreprises::create($entreprise)) {}
			else $witness=false;
			//$witness=$entreprise;

		}
		if($witness) {
			if(!Entreprises::where('annee','<', '2022')->update(['annee'=>now()->year]))
				$witness=false;
		}
		if($witness) {
			return response()->json([
				'succes'=>"backup effectue, date mise a jour",
				//'codeIns'=>$request->codeIns,
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"quelque chose n'a pas marche",
			], 500);
		}
	}


	// la fonction pour les test de code
	public function test(Request $request) {
		$validate=$request->validate([
			'file'=>'required|mimes:csv,txt'
		]);
		$n=0;
		$error="les entreprises ";
		$entreprises=[];
		$data=convertCsvToArray($request->file, ',');
		for($i=0; $i<count($data); $i++) {
			$entreprise=buildEntreprise($data[$i]);
			$witness=storeEntreprise($entreprise);
			if($witness) $n++;
			else $error=$error."".$entreprise['raisonSociale'].', ';
			$entreprises[$i]=$entreprise;

		}
		//$result=Entreprises::where('statutTraitement', true)->where('codeINS', '<>', null)->orderByDesc('codeINS')->take(2)->get();
		//return $result;
		return response()->json([
			'success'=>$n." entreprises ont ete inserees",
			'error'=>$error."n'ont pas ete inserees",
		], 200);
	}
  
}

// handle INS code

// calcul key of code funtion
function calculKey($chaine) {
	$impair=0;
	$pair=0;
	$chaine=str_split($chaine);
	//echo($t[0]);
	for($i=0; $i<count($chaine); $i++) {
		$r=$i+1;
		if($r%2) {
			$impair+=$chaine[$i];
		}
		else {
			$pair+=2*$chaine[$i];
		}
	}
	$somme=$pair + $impair;
	$somme%10 ? $cle=10-$somme%10 : $cle=0;
	//echo("pair : $pair,  impair : $impair, cle : $cle ");
	return $cle;
}

// generate code function
function genererCode($code, $secteur) {
	if($code) {
		$chaine=substr($code, 0, 6);
		$chaine+=1;
		$cle=calculKey($chaine);
		$chaine=$chaine.$cle."000";
		//echo("le prochain code INS est : ".$chaine);
		return $chaine;
	}
	else return $secteur==='SECTEUR PUBLIC' ? "1000016000" : "2000016000";

}

function convertCsvToArray(String $file, String $delimiter) {
	$header=null;
	$data=array();
	if (!file_exists($file) || !is_readable($file))	return "the file not exist or is not readable";
	if(($handle=fopen($file, 'r')) !== false) {
		while(($row=fgetcsv($handle, 1000, $delimiter)) !== false) 
		{
			if(!$header) $header=$row;
			else $data[]=array_combine($header, $row);
		}
		fclose($handle);
		return $data;
	}
	else return "can't open the file";

}

function validEntreprise(Request $entreprise) {
}

function getcode($table) {
	return count($table) ? $table[0]->code : 0;
}

function buildEntreprise($data) {
	$entreprise['raisonSociale']=$data['RAISON_SOCIALE'];
	$entreprise['numContribuable']=$data['NIU'];
	$entreprise['sigle']=$data['SIGLE'];
	$entreprise['codeActivitePrincipale']=$data['CODE_ACTIVITE'];
	$data['ACTIVITE_PRINCIPALE'] ? $entreprise['libelleActivitePrincipale']=$data['ACTIVITE_PRINCIPALE'] : null;
	$data['ANNEE_ENTREE'] ? $entreprise['dateenreg']=$data['ANNEE_ENTREE'] : null;
	//$entreprise['codeBrancheActivitePrincipale']=$data['']
	//$entreprise['']=$data['N°_BORDEREAU']
	//$entreprise['']=$data['ANNEE_DSF']
	$data['DATE_CREATION'] ? $entreprise['dateCreation']=$data['DATE_CREATION'] : null;
	$data['BP'] ? $entreprise['boitePostale']=$data['BP'] : null;
	$entreprise['region']=getcode(Regions::where('libelle', $data['REGION_ADMIN'])->get());
	$entreprise['departement']=getcode(Departements::where('libelle', $data['DEPARTEMENT'])->get());
	//$entreprise['']=$data['VILLE'];
	$entreprise['arrondissement']=getcode(Arrondissements::where('libelle', $data['COMMUNE'])->get());
	$data['QUARTIER'] ? $entreprise['quartier']=$data['QUARTIER'] : null;
	$data['LIEUX_DIT'] ? $entreprise['pointRepere']=$data['LIEUX_DIT'] : null;
	$data['TEL-1'] ? $entreprise['tel1']=$data['TEL-1'] : null;
	$data['TEL-2'] ? $entreprise['tel2']=$data['TEL-2'] : null;
	$data['REGISTRE_COMMERCE'] ? $entreprise['numRegistreCommerce']=$data['REGISTRE_COMMERCE'] : null;
	$data['VILLE_RC'] ? $entreprise['villeRegistreCommerce']=$data['VILLE_RC'] : null;
	$data['VILLE_IMP'] ? $entreprise['villeImplantation']=$data['VILLE_IMP'] : null;
	$data['GPS'] ? $entreprise['numGps']=$data['GPS'] : null;
	$data['E-MAIL'] ? $entreprise['email']=$data['E-MAIL'] : null;
	$data['SITE_WEB'] ? $entreprise['siteweb']=$data['SITE_WEB'] : null;
	//$entreprise['codeFormeJuridique']=$data['']
	$data['FORME_JURIDIQUE'] ? $entreprise['libelleFormeJuridique']=$data['FORME_JURIDIQUE'] : null;
	$data['CHIFFRE_AFFAIRES'] ? $entreprise['chiffaff']=$data['CHIFFRE_AFFAIRES'] : null;
	$data['EFFECTIF_EMPLOIS'] ? $entreprise['effectifTotal']=$data['EFFECTIF_EMPLOIS'] : null;
	$data['TYPE'] ? $entreprise['typeEntreprise']=$data['TYPE'] : null;
	$entreprise['secteurActivites']=getcode(SecteurActivites::where('libelle', $data['SECTEUR'])->get());
	$data['EXPORT'] ? $entreprise['situationExportation']=$data['EXPORT'] : null;
	$data['CA_EXPORT'] ? $entreprise['chiffaffexp']=$data['CA_EXPORT']: null;
	$data['DEBUT_ACTIV'] ? $entreprise['datedemarrage']=$data['DEBUT_ACTIV'] : null;
	$data['CESSATION_ACTIV'] ? $entreprise['dateCessation']=$data['CESSATION_ACTIV']: null;
	//$entreprise['']=$data['STATUT']
	$data['CIVIL'] ? $entreprise['civilite']=$data['CIVIL'] : null;
	$data['SEXE'] ? $entreprise['sexe']=$data['SEXE'] : null;
	$data['DATE_A_JOUR'] ? $entreprise['dateMiseajours']=$data['DATE_A_JOUR'] : null;
	//$entreprise['']=$data['CENTRE_DE_RATTACHEMENT']
	//$entreprise['']=$data['']
	//$entreprise['']=$data['']

	// varianles de gestion
	$entreprise['statutTraitement']=true;
	$entreprise['sourceMiseAJour']=1;
	$entreprise['etatMiseAJour']=true;
	//$entreprise['dateMiseajours']=now();
	$entreprise['annee']=now()->year;
	return $entreprise;
}

function storeEntreprise($entreprise) {
	$entreprise['libelleFormeJuridique']==="SECTEUR PUBLIC" ? ($result=Entreprises::where('statutTraitement', true)->where('libelleFormeJuridique', 'SECTEUR PUBLIC')->where('codeINS', '<>', null)->orderByDesc('codeINS')->take(2)->get()) 
		:	($result=Entreprises::where('statutTraitement', true)->where('libelleFormeJuridique','<>', 'SECTEUR PUBLIC')->where('codeINS', '<>', null)->orderByDesc('codeINS')->take(2)->get());
	try {
		if(count($result)){
			$ins=genererCode($result[0]->codeINS, $entreprise['libelleFormeJuridique']);
		}
		else {
			$ins=genererCode("", $entreprise['libelleFormeJuridique']);
		}
		$entreprise['codeINS']=$ins;
		if(Entreprises::create($entreprise)) return true;
		else return false;
	} catch (\Throwable $th) {
		return false;
	}
}

?>