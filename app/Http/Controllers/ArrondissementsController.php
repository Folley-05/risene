<?php 

namespace App\Http\Controllers;

use App\Models\Arrondissements;
use Illuminate\Http\Request;

class ArrondissementsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $requete)
  {
    $arrondissement = new Arrondissements();
    $arrondissement->code = $requete->code;
    $arrondissement->libelle = $requete->libelle;
    $arrondissement->save();

    if($arrondissement)
    {
      return back()->with('success', 'Ajout de l\'arrondissement avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec d\'ajout de l\'arrondissement ');
    } 
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
  public function show()
  {
    $arrondissements = Arrondissements::orderBy('code', 'ASC')->get();
    return view('tableBases\arrondissement\viewArrondissement', compact('arrondissements'));
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
    $arrondissement = Arrondissements::where('code', $id)->delete();
    if($arrondissement)
    {
      return back()->with('success', 'Suppression de l\'arrondissement avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression de l\'arrondissement ');
    }
  }
  
}

?>