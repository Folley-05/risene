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
   * Display a order listing of the resource.
   *
   * @return Response
   */
  public function order()
  {
		return Etablissements::orderBy('raisonSociale')->orderBy('codeActivitePrincipale')->get();

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
      $data['statutSiege']=false;
      $data['statutTraitement']=true;
      //$data['sourceMiseAJour']=1;
      $data['etatMiseAJour']=true;
      //$data['dateMiseajours']=now();
      $data['annee']=now()->year;
      $data['statutSuppression']=false;
      $data['statutSiege']=false;
		Etablissements::firstOrCreate($data);
	  }
	  return $etablissements;
	  return response()->json([
		  'succes'=>$i." datas inserees ",
	  ], 200);
  }

  public function store2(Request $request)
  {
    //return now()->year;
    $validate=$request->validate([
        'id_entreprise'=>'required',
        'numContribuable'=>'required',
        'raisonSociale'=>'required',
        'pointRepere'=>'required',
        'sigle'=>'required',
        'codeActivitePrincipale'=>'required',
        'libelleActivitePrincipale'=>'required',
        'codeBrancheActivitePrincipale'=>'required',
    ]);
    if($validate) {
        if(Etablissements::create($request->all())) {
            return response()->json([
                'succes'=>"etablissement enregistre",
                //'codeIns'=>$request->codeIns,
            ], 200);
        }
        else {
            return response()->json([
                'echec'=>"entreprise non cree",
            ], 500);
        }
    }
    //return $request;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Etablissements $id)
  {
    return $id;
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
  public function update(Request $request, Etablissements $id)
	{
		$validate=$request->validate([
			'id'=>'prohibited',
			'id_entreprise'=>'prohibited',
			// 'sigleSiege'=>'prohibited',
			// 'raisonSociale'=>'prohibited',
			// 'numContribuable'=>'prohibited',
			// 'brancheActivitePrincipale'=>'prohibited',
			// 'codeBrancheActivitePrincipale'=>'prohibited',
			'annee'=>'prohibited',
			// 'sigle'=>'prohibited',
			'codeINS'=>'prohibited',
			'statutTraitement'=>'prohibited',
			//'numCNPS'=>'unique:etablissements,numCNPS'
		]);
		$request->merge([
			'dateMiseajours'=>now()
		]);
		$result=Etablissements::where('id', $id->id)->get();
		/*
			if(!$result[0]->etatMiseAJour)
				return response()->json([
					'echec'=>"vous ne pouvez pas mettre a jour une etablissement sans donnees",
				], 500);
		*/
		if($id->update($request->all())) {
			return response()->json([
				'success'=>"etablissement mise a jour",
			], 200);
		}
		else  {
			return response()->json([
				'echec'=>"echec de la mise a jour",
			], 500);
		}
	}


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Etablissements $id)
  {

  }

}

?>
