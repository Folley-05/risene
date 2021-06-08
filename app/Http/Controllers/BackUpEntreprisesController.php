<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BackUpEntreprises;

class BackUpEntreprisesController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
	public function index()
	{
		return BackUpEntreprises::all();
	}

  /**
   * Display a listing of the resource sorted by year .
   *
   * @return Response
   */
  public function sortByYear(Request $request) {
		return BackUpEntreprises::where('annee', $request->year)->get();
    //return $request->year;
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