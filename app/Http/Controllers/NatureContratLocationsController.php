<?php 

namespace App\Http\Controllers;

use App\Models\NatureContratLocations;
use Illuminate\Http\Request;

class NatureContratLocationsController extends Controller 
{
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  function create(Request $requeste)
  {

    $ncl = new NatureContratLocations();
    $ncl->code = $requeste->code;
    $ncl->intitule = $requeste->intitule;
    $ncl->save();

    if($ncl)
    {
      return back()->with('success', 'Ajout de la nature contrat location  avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec d\'ajout de la nature contrat location  ');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  function store(Request $request)
  {
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show()
  {
    $ncl = NatureContratLocations::orderBy('code', 'ASC')->get();
    return view('tableBases\natureContratLocation\viewNatureContratLocation', compact('ncl'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit()
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
    $ncl = NatureContratLocations::where('code', $id)->delete();
    if($ncl)
    {
      return back()->with('success', 'Suppression de la nature contrat location avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression de la nature contrat location ');
    }
  }
  
}

?>