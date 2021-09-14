<?php

namespace App\Http\Controllers;

use App\Models\Arrondissements;
use Illuminate\Http\Request;

use Rap2hpoutre\FastExcel\FastExcel;

class ArrondissementsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Arrondissements::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return Arrondissements::orderByDesc('created_at')->get();
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
		if(Arrondissements::create($request->all())) {
			return response()->json([
				'succes'=>"arrondissement cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"arrondissement non cree",
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Arrondissements $code)
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
	public function update(Request $request, Arrondissements $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"arrondissement mis a jour",
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
	public function destroy(Arrondissements $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"arrondissement supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"arrondissement non supprime"
			], 500);
		}
	}

    public function manyDelete(Request $request) {
        $list;
        $list=$request->all()['list'];
        for ($i=0; $i<count($list) ; $i++) {
            try {
                $reg=Arrondissements::where('code', $list[$i])->get()[0];
                $reg->delete();
            } catch (\Throwable $th) {
            }
        }
        return response()->json([
            'response'=>"suppression effectuee"
        ], 200);
    }

	/**
	 * insert from file function.
	 *
	 * @return Response
	*/
	public function import(Request $request) {
		$validate=$request->validate([
			//'file'=>'required|mimes:txt,csv',
			'file'=>'required|mimes:xlsx,xls',
		]);

        $collection = (new FastExcel)->import($request->file);
        if(sizeof($collection)) {
            for($i=0; $i<count($collection); $i++){
                Arrondissements::firstOrCreate($collection[$i]);
            }
			return response()->json([
                "success"=> $i." arrondissements inseres ",
			], 200);
        }
        else {
			return response()->json([
                "error"=> " le fichier est vide ",
			], 200);
        }



		/*$data=convertCsvToArray($request->file, ',');
		if(sizeof($data)) {
			for ($i = 0; $i < count($data); $i ++) {
				Arrondissements::firstOrCreate($data[$i]);
			}
			return response()->json([
				"success"=> $i." insersions effectuees, ",
			], 200);
		}
		return response()->json([
			"echec"=> "quelque chose s'est mal passe",
			"erreur"=> $data
		]);
		return $data;*/
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

function buildArrondissement($data) {
	$arrondissement['']='';
}

?>
