<?php 

namespace App\Http\Controllers;

use App\Models\NatureCreation;
use Illuminate\Http\Request;

class NatureCreationController extends Controller 
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

    $nc = new NatureCreation();
    $nc->code = $requeste->code;
    $nc->designation = $requeste->designation;
    $nc->save();

    if($nc)
    {
      return back()->with('success', 'Ajout de la nature de creatkion avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec d\'ajout de la nature de creation');
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
    $nc = NatureCreation::orderBy('code', 'ASC')->get();
    return view('tableBases\natureCreation\viewNatureCreation', compact('nc'));
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
    $nc = NatureCreation::where('code', $id)->delete();
    if($nc)
    {
      return back()->with('success', 'Suppression de la nature de creation');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression de la nature de creation ');
    }
  }
}

?>