<?php 

namespace App\Http\Controllers;

use App\Models\SystemeDsfs;
use Illuminate\Http\Request;

class SystemeDsfsController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return SystemeDsfs::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return SystemeDsfs::orderByDesc('created_at')->get();
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
		if(SystemeDsfs::create($request->all())) {
			return response()->json([
				'succes'=>"systemedsf cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"systemedsf non cree",
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(SystemeDsfs $code)
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
	public function update(Request $request, SystemeDsfs $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"systemedsf mis a jour",
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
	public function destroy(SystemeDsfs $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"systemedsf supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"systemedsf non supprime"
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
			'file'=>'required|mimes:csv'
		]);
		$data=convertCsvToArray($request->file, ',');
		if(sizeof($data)) {
			for ($i = 0; $i < count($data); $i ++) {
				SystemeDsfs::firstOrCreate($data[$i]);
			}
			return $i." insersions effectuees, ";
		}
		return response()->json([
			"echec"=> "quelque chose s'est mal passe",
			"erreur"=> $data
		]);
		//return $data;
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