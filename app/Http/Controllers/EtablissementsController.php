<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissements;

class EtablissementsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
	  return Etablissements::all();
	
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
	
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
	  $etablissements=json_decode($request->etablissements);
	  for ($i = 0; $i < count($etablissements); $i ++) {
		  $data=(array)$etablissements[$i];
		  Etablissements::firstOrCreate($data);
	  }
	  return response()->json([
		  'succes'=>$i." entreprises inserees ",
	  ], 200);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
	
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
  public function update($id)
  {
	
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
	
  }
  
}

?>