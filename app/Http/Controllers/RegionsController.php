<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Regions;


class RegionsController extends Controller 
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

    $region = new Regions();
    $region->code = $requeste->code;
    $region->libelle = $requeste->libelle;
    $region->save();

    if($region)
    {
      return back()->with('success', 'Ajout de la region avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec d\'ajout de la region ');
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
    $regions = Regions::orderBy('code', 'ASC')->get();
    return view('tableBases\region\viewRegion', compact('regions'));
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
    $region = Regions::where('code', $id)->delete();
    if($region)
    {
      return back()->with('success', 'Suppression de la region avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression de la region ');
    }
  }
  
}

?>