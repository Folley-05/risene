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
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  function create(Request $requeste)
  {

    $etatActivite = new EtatActivites();
    $etatActivite->code = $requeste->code;
    $etatActivite->etat = $requeste->etat;
    $etatActivite->save();

    if($etatActivite)
    {
      return back()->with('success', 'Ajout de l\'etat d\'Activite avec success');
        
    }
    else{
      return back()->with('echec', 'Echec de l\'ajout de  l\'etat d\'Activite ');
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
    $etatActivite = EtatActivites::orderBy('code', 'ASC')->get();
    return view('tableBases\etatActivite\viewEtatActivite', compact('etatActivite'));
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
    $etatActivite = EtatActivites::where('code', $id)->delete();
    if($etatActivite)
    {
      return back()->with('success', 'Suppression de l\'etat d\'Activiteavec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression de l\'etat d\'Activite ');
    }
  }
  
  
}

?>