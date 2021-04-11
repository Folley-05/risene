<?php 

namespace App\Http\Controllers;

use App\Models\SystemeDsfs;
use Illuminate\Http\Request;

class SystemeDsfsController extends Controller 
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

    $dsf = new SystemeDsfs();
    $dsf->code = $requeste->code;
    $dsf->designation = $requeste->designation;
    $dsf->save();

    if($dsf)
    {
      return back()->with('success', 'Ajout du systeme DSF');
        
    }
    else{
      return back()->with('echec', 'Echec du systeme DSF ');
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
    $systemeDsf = SystemeDsfs::orderBy('code', 'ASC')->get();
    return view('tableBases\systemeDsf\viewSystemeDsf', compact('systemeDsf'));
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
    $systemeDsf = SystemeDsfs::where('code', $id)->delete();
    if($systemeDsf)
    {
      return back()->with('success', 'Suppression du systeme Dsf avec succes');
        
    }
    else{
      return back()->with('echec', 'Echec de suppression du systeme Dsf ');
    }
  }
  
}

?>