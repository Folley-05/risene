<?php 

namespace App\Http\Controllers;

use App\Models\StatusOccupationLocals;
use Illuminate\Http\Request;

class StatusOccupationLocalsController extends Controller 
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

    $sol = new StatusOccupationLocals();
    $sol->code = $requeste->code;
    $sol->designation = $requeste->designation;
    $sol->save();

    if($sol)
    {
      return back()->with('success', 'Ajout du Statut Occupation Local');
        
    }
    else{
      return back()->with('echec', 'Echec du Statut Occupation Local');
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
    $sol = StatusOccupationLocals::orderBy('code', 'ASC')->get();
    return view('tableBases\statusOccupationLocal\viewStatusOccupationLocal', compact('sol'));
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
    $sol = StatusOccupationLocals::where('code', $id)->delete();
    if($sol)
    {
      return back()->with('success', 'Suppression du status occupation local avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression du status occupation local ');
    }
  }
  
}

?>