<?php 

namespace App\Http\Controllers;

use App\Models\RegimeImpots;
use Illuminate\Http\Request;

class RegimeImpotsController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return RegimeImpots::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return RegimeImpots::orderByDesc('created_at')->get();
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
		if(RegimeImpots::create($request->all())) {
			return response()->json([
				'succes'=>"regimeimpot cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"regimeimpot non cree",
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(RegimeImpots $code)
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
	public function update(Request $request, RegimeImpots $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"regimeimpot mis a jour",
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
	public function destroy(RegimeImpots $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"regimeimpot supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"regimeimpot non supprime"
			], 500);
		}
	}
  
}

?>