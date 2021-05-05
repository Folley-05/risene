<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprises;

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
			'sigleSiege'=>'required',
			'raisonSociale'=>'required',
			'numContribuable'=>'required|unique:entreprises,numContribuable',
			'brancheActivitePrincipale'=>'required',
			'codeBrancheActivitePrincipale'=>'required',
			'annees'=>'required',
			'sigle'=>'required|unique:entreprises,sigle'
		]);
		$request->merge([
			'statutTraitement'=>false
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
			'sigleSiege'=>'required',
			'raisonSociale'=>'required',
			'numContribuable'=>'required|unique:Entreprises,numContribuable',
			'numCNPS'=>'unique:Entreprises,numCNPS'
			//'libelle'=>'required'
		]);
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
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise remplie, code ins attribue",
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
			'statutTraitement'=>true
		]);
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"entreprise valide, code ins attribue",
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

	public function wait(Entreprises $id) {
		return " a coder ";
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
?>