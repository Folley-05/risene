<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprises;
use App\Models\BackUpEntreprises;

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
		return Entreprises::where('statutSuppression', true)->get();
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
		$validate=$request->validate([
			'raisonSociale'=>'required',
			'numContribuable'=>'required|unique:entreprises,numContribuable',
			'brancheActivitePrincipale'=>'required',
			'codeBrancheActivitePrincipale'=>'required',
			'sigle'=>'required|unique:entreprises,sigle',
			'codeINS'=>'prohibited',
			'statutTraitement'=>'prohibited',
			'etatMiseAJour'=>'prohibited',
		]);
		$request->merge([
			'statutTraitement'=>false,
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
	public function show(Entreprises $id)
	{
		return $id;
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
			'numCNPS'=>'unique:Entreprises,numCNPS'
		]);
		$request->merge([
			'dateMiseajours'=>now()
		]);
		$result=Entreprises::where('id', $id->id)->get();
		if(!$result[0]->etatMiseAJour) 
			return response()->json([
				'echec'=>"vous ne pouvez pas mettre a jour une entreprise sans donnees",
			], 500);

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
	
	public function add(Request $request) {
		return "a coder";
	}
	
	public function full(Request $request, Entreprises $id) {
		$result=Entreprises::where('id', $id->id)->get();
		if($result[0]->etatMiseAJour) 
			return response()->json([
				'echec'=>"vous ne pouvez pas remplir cette entreprise essayez une mise a jour",
			], 500);
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
		$result=Entreprises::where('statutTraitement', true)->orderByDesc('created_at')->take(2)->get();
		$ins=genererCode($result[0]->codeINS);
		$request->merge([
			'codeINS'=>$ins,
			'statutTraitement'=>true,
		]);
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise valide",
				'codeIns'=>$ins,
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec de la validation",
			], 500);
		}
		//return $request;
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

	public function import(Request $request) {
		$validate=$request->validate([
			'file'=>'required|mimes:txt'
		]);
		$data=convertCsvToArray(public_path('test.csv'), ',');
		for ($i = 0; $i < count($data); $i ++)
		{
			Entreprises::firstOrCreate($data[$i]);
		}
		return $i."insersions effectuees, ";
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


	// la fonctiom pour les test de code
	public function test(Request $request) {
		
		//return Entreprises::where('annee', '2019')->update(['annee'=>'2010']);
		//return Entreprises::all()->take(1);
		return now()->year;
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
function genererCode($code) {
	if($code) {
		$chaine=substr($code, 0, 6);
		$chaine+=1;
		$cle=calculKey($chaine);
		$chaine=$chaine.$cle."000";
		//echo("le prochain code INS est : ".$chaine);
		return $chaine;
	}
	else return "2000016000";

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

?>