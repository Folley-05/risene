<?php 

namespace App\Http\Controllers;

use App\Models\Departements;
use Illuminate\Http\Request;

class DepartementsController extends Controller 
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
    $departement = new Departements();
    $departement->code = $requete->code;
    $departement->libelle = $requete->libelle;
    $departement->save();

    if($departement)
    {
      return back()->with('success', 'Ajout du departement avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec d\'ajout du departement ');
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
    $departements = Departements::orderBy('code', 'ASC')->get();
    return view('tableBases\departement\viewDepartement', compact('departements'));
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
    $departement = Departements::where('code', $id)->delete();
    if($departement)
    {
      return back()->with('success', 'Suppression du departement avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression du departement ');
    }
  }

  
}

?>