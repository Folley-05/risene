<?php 

namespace App\Http\Controllers;

use App\Models\EtatActivites;
use Illuminate\Http\Request;

class EtatActivitesController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return EtatActivites::all();
	}

	/**
	 * Display a order listing of ressource.
	 *
	 * @return Response
	 */
	public function order()
	{
		return EtatActivites::orderByDesc('created_at')->get();
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
		if(EtatActivites::create($request->all())) {
			return response()->json([
				'succes'=>"etat activite cree avec succes",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"etat activite non cree",
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(EtatActivites $code)
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
	public function update(Request $request, EtatActivites $code)
	{
		if($code->update($request->all())) {
			return response()->json([
				'success'=>"etat activite mis a jour",
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
	public function destroy(EtatActivites $code)
	{
		if($code->delete()) {
			return response()->json([
				'success'=>"etat activite supprime",
			], 200);
		}
		else {
			return response()->json([
				'echec'=>"etat activite non supprime"
			], 500);
		}
	}
  
  
}

?>