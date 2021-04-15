<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Regions;


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
		$request->merge([
			'libelle'=>"Mbouda"
		]);
		$validate=$request->validate([
			'code'=>'required|unique:regions,code',
			//'libelle'=>'required'
		]);
		if($validate) {
			if(Regions::create($region->all())) {
				return response()->json([
					'succes'=>"regions cree avec succes",
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
  
}

?>