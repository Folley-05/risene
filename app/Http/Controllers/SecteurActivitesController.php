<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecteurActivites;

class SecteurActivitesController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return SecteurActivites::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return SecteurActivites::orderByDesc('created_at')->get();
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
			'code'=>'required|unique:secteurActivites,code',
			//'libelle'=>'required'
		]);
		if($validate) {
			if(SecteurActivites::create($request->all())) {
				return response()->json([
					'succes'=>"secteur d'activites cree avec succes",
				], 200);
			}
			else {
				return response()->json([
					'echec'=>"secteur d'activites non cree",
				], 500);
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(SecteurActivites $code)
	{
		return $code;
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
	public function update(Request $request, SecteurActivites $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"secteur d'activites mis a jour",
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
	public function destroy(SecteurActivites $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"secteur d'activite supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"secteur d'activite non supprime"
			], 500);
		}
	}

	/**
	 * insert from file function.
	 *
	 * @return Response
	 */
	public function import(Request $request) {
		$validate=$request->validate([
			'file'=>'required|mimes:txt'
		]);
		$data=convertCsvToArray($request->file, ',');
		if(sizeof($data)) {
			for ($i = 0; $i < count($data); $i ++) {
				SecteurActivites::firstOrCreate($data[$i]);
			}
			return $i." insersions effectuees, ";
		}
		return response()->json([
			"echec"=> "quelque chose s'est mal passe",
			"erreur"=> $data
		]);
	}
  
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