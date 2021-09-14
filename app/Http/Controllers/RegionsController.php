<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Regions;

use Rap2hpoutre\FastExcel\FastExcel;


class RegionsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Regions::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return Regions::orderByDesc('created_at')->get();
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
			'code'=>'required|unique:regions,code',
			'libelle'=>'required'
		]);
		if($validate) {
			if(Regions::create($request->all())) {
				return response()->json([
					'success'=>"regions cree avec success",
				], 200);
			}
			else {
				return response()->json([
					'echec'=>"regions non cree",
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
	public function show(Regions $code)
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
	public function update(Request $request, Regions $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"regions mis a jour",
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
	public function destroy(Regions $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"regions supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"regions non supprime"
			], 500);
		}
	}

    public function manyDelete(Request $request) {
        $list;
        $list=$request->all()['list'];
        for ($i=0; $i<count($list) ; $i++) {
            try {
                $reg=Regions::where('code', $list[$i])->get()[0];
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
                Regions::firstOrCreate($collection[$i]);
            }
			return response()->json([
                "success"=> $i." regions inseres ",
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
				Regions::firstOrCreate($data[$i]);
			}
			return response()->json([
				"success"=> $i." insersions effectuees, ",
			], 200);
		}
		return response()->json([
			"echec"=> "quelque chose s'est mal passe",
			"erreur"=> $data
		], 500);*/
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
