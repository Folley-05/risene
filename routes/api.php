<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArrondissementsController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\SystemeDsfsController;
use App\Http\Controllers\EtatActivitesController;
use App\Http\Controllers\NatureContratLocationsController;
use App\Http\Controllers\NatureCreationController;
use App\Http\Controllers\RegimeImpotsController;
use App\Http\Controllers\StatusOccupationLocalsController;
use App\Http\Controllers\MotifArretActivitesController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\VentilationsController;
use App\Http\Controllers\CatImpotLiberatoiresController;
use App\Http\Controllers\CatJuridiquesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users Routes
Route::get('getusers', [UserController::class, 'index']);
Route::get('getorderusers', [UserController::class, 'order']);
Route::get('getuser/{id},', [UserController::class, 'show']);
Route::post('auth', [UserController::class, 'auth']);
Route::post('setuser', [UserController::class, 'store']);
Route::post('updateuser/{id}', [UserController::class, 'update']);
Route::delete('deleteuser/{id}', [UserController::class, 'destroy']);
Route::post('importregions', [UserController::class, 'import']);

// Arrondissements Routes
Route::get('getarrondissements', [ArrondissementsController::class, 'index']);
Route::get('getorderarrondissements', [ArrondissementsController::class, 'order']);
Route::get('getarrondissement/{code}', [ArrondissementsController::class, 'show']);
Route::post('setarrondissement', [ArrondissementsController::class, 'store']);
Route::post('updatearrondissement/{code}', [ArrondissementsController::class, 'update']);
Route::delete('deletearrondissement/{code}', [ArrondissementsController::class, 'destroy']);
Route::post('importregions', [ArrondissementsController::class, 'import']);

//Departements Routes
Route::get('getdepartements', [DepartementsController::class, 'index']);
Route::get('getorderdepartements', [DepartementsController::class, 'order']);
Route::get('getdepartement/{code}', [DepartementsController::class, 'show']);
Route::post('setdepartement', [DepartementsController::class, 'store']);
Route::post('updatedepartement/{code}', [DepartementsController::class, 'update']);
Route::delete('deletedepartement/{code}', [DepartementsController::class, 'destroy']);
Route::post('importregions', [DepartementsController::class, 'import']);

// Regions Routes
Route::get('getregions', [RegionsController::class, 'index']);
Route::get('getorderregions', [RegionsController::class, 'order']);
Route::get('getregion/{code}', [RegionsController::class, 'show']);
Route::post('setregion', [RegionsController::class, 'store']);
Route::post('updateregion/{code}', [RegionsController::class, 'update']);
Route::delete('deleteregion/{code}', [RegionsController::class, 'destroy']);
Route::post('importregions', [RegionsController::class, 'import']);

// SystemeDsf Routes
Route::get('getsystemedsfs', [SystemeDsfsController::class, 'index']);
Route::get('getordersystemedsfs', [SystemeDsfsController::class, 'order']);
Route::get('getsystemedsf/{code}', [SystemeDsfsController::class, 'show']);
Route::post('setsystemedsf', [SystemeDsfsController::class, 'store']);
Route::post('updatesystemedsf/{code}', [SystemeDsfsController::class, 'update']);
Route::delete('deletesystemedsf/{code}', [SystemeDsfsController::class, 'destroy']);
Route::post('importregions', [SystemeDsfsController::class, 'import']);

// EtatActivites Routes
Route::get('getetatactivites', [EtatActivitesController::class, 'index']);
Route::get('getorderetatactivites', [EtatActivitesController::class, 'order']);
Route::get('getetatactivite/{code}', [EtatActivitesController::class, 'show']);
Route::post('setetatactivite', [EtatActivitesController::class, 'store']);
Route::post('updateetatactivite/{code}', [EtatActivitesController::class, 'update']);
Route::delete('deleteetatactivite/{code}', [EtatActivitesController::class, 'destroy']);
Route::post('importregions', [EtatActivitesController::class, 'import']);

// NatureContratLocation Routes
Route::get('getnaturecontratlocations', [NatureContratLocationsController::class, 'index']);
Route::get('getordernaturecontratlocations', [NatureContratLocationsController::class, 'order']);
Route::get('getnaturecontratlocation/{code}', [NatureContratLocationsController::class, 'show']);
Route::post('setnaturecontratlocation', [NatureContratLocationsController::class, 'store']);
Route::post('updatenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'update']);
Route::delete('deletenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'destroy']);
Route::post('importregions', [NatureContratLocationsController::class, 'import']);

// NatureCreation Routes
Route::get('getnaturecreations', [NatureCreationController::class, 'index']);
Route::get('getordernaturecreations', [NatureCreationController::class, 'order']);
Route::get('getnaturecreation/{code}', [NatureCreationController::class, 'show']);
Route::post('setnaturecreation', [NatureCreationController::class, 'store']);
Route::post('updatenaturecreation/{code}', [NatureCreationController::class, 'update']);
Route::delete('deletenaturecreation/{code}', [NatureCreationController::class, 'destroy']);
Route::post('importregions', [NatureCreationController::class, 'import']);

// RegimeImpots Routes
Route::get('getregimeimpots', [RegimeImpotsController::class, 'index']);
Route::get('getorderregimeimpots', [RegimeImpotsController::class, 'order']);
Route::get('getregimeimpot/{code}', [RegimeImpotsController::class, 'show']);
Route::post('setregimeimpot', [RegimeImpotsController::class, 'store']);
Route::post('updateregimeimpot/{code}', [RegimeImpotsController::class, 'update']);
Route::delete('deleteregimeimpot/{code}', [RegimeImpotsController::class, 'destroy']);
Route::post('importregions', [RegimeImpotsController::class, 'import']);

// StatutOccupationLocal Routes
Route::get('getstatusoccupationlocales', [StatusOccupationLocalsController::class, 'index']);
Route::get('getorderstatusoccupationlocales', [StatusOccupationLocalsController::class, 'order']);
Route::get('getstatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'show']);
Route::post('setstatusoccupationlocale', [StatusOccupationLocalsController::class, 'store']);
Route::post('updatestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'update']);
Route::delete('deletestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'destroy']);
Route::post('importregions', [StatusOccupationLocalsController::class, 'import']);

// MotifArretActivites Routes
Route::get('getmotifarretactivites', [MotifArretActivitesController::class, 'index']);
Route::get('getordermotifarretactivites', [MotifArretActivitesController::class, 'order']);
Route::get('getmotifarretactivite/{code}', [MotifArretActivitesController::class, 'show']);
Route::post('setmotifarretactivite', [MotifArretActivitesController::class, 'store']);
Route::post('updatemotifarretactivite/{code}', [MotifArretActivitesController::class, 'update']);
Route::delete('deletemotifarretactivite/{code}', [MotifArretActivitesController::class, 'destroy']);
Route::post('importregions', [MotifArretActivitesController::class, 'import']);

// Statut Routes
Route::get('getstatuss', [StatusController::class, 'index']);
Route::get('getorderstatuss', [StatusController::class, 'order']);
Route::get('getstatus/{code}', [StatusController::class, 'show']);
Route::post('setstatus', [StatusController::class, 'store']);
Route::post('updatestatus/{code}', [StatusController::class, 'update']);
Route::delete('deletestatus/{code}', [StatusController::class, 'destroy']);
Route::post('importregions', [StatusController::class, 'import']);

// Entreprises Routes
Route::get('getentreprises', [EntreprisesController::class, 'index']);
Route::get('getorderentreprises', [EntreprisesController::class, 'order']);
Route::get('getactiveentreprises', [EntreprisesController::class, 'active']);
Route::get('getentreprise/{id}', [EntreprisesController::class, 'show']);
Route::post('setentreprise', [EntreprisesController::class, 'store']);
Route::get('waitingentreprises', [EntreprisesController::class, 'waiting']);
Route::get('waitingentreprise/{id}', [EntreprisesController::class, 'wait']);
Route::get('updatedentreprise', [EntreprisesController::class, 'updated']);
Route::post('addentreprise', [EntreprisesController::class, 'add']);
Route::post('fullentreprise/{id}', [EntreprisesController::class, 'full']);
Route::post('validentreprise/{id}', [EntreprisesController::class, 'valid']);
Route::post('updateentreprise/{id}', [EntreprisesController::class, 'update']);
Route::delete('deleteentreprise/{id}', [EntreprisesController::class, 'del']);
Route::post('importentreprises', [EntreprisesController::class, 'import']);

// Ventilations Routes
Route::get('getventilations', [VentilationsController::class, 'index']);
Route::get('getventilation/{code}', [VentilationsController::class, 'show']);
Route::get('getorderventilations/{id}', [VentilationsController::class, 'list']);
Route::post('setventilation', [VentilationsController::class, 'store']);
Route::post('updateventilation/{code}', [VentilationsController::class, 'update']);
Route::delete('deleteventilation/{code}', [VentilationsController::class, 'destroy']);
Route::post('importregions', [VentilationsController::class, 'import']);

// Produits Routes
Route::get('getproduits', [ProduitsController::class, 'index']);
Route::get('getproduit/{code}', [ProduitsController::class, 'show']);
Route::get('getorderproduits/{id}', [ProduitsController::class, 'list']);
Route::post('setproduit', [ProduitsController::class, 'store']);
Route::post('updateproduit/{code}', [ProduitsController::class, 'update']);
Route::delete('deleteproduit/{code}', [ProduitsController::class, 'destroy']);
Route::post('importregions', [ProduitsController::class, 'import']);

// Activites Routes
Route::get('getactivites', [ActivitesController::class, 'index']);
Route::get('getorderactivites', [ActivitesController::class, 'order']);
Route::get('getactivite/{code}', [ActivitesController::class, 'show']);
Route::post('setactivite', [ActivitesController::class, 'store']);
Route::post('updateactivite/{code}', [ActivitesController::class, 'update']);
Route::delete('deleteactivite/{code}', [ActivitesController::class, 'destroy']);
Route::post('importregions', [ActivitesController::class, 'import']);

// CatImpotLiberatoires Routes
Route::get('getcatimpotliberatoires', [CatImpotLiberatoiresController::class, 'index']);
Route::get('getordercatimpotliberatoires', [CatImpotLiberatoiresController::class, 'order']);
Route::get('getcatimpotliberatoires/{code}', [CatImpotLiberatoiresController::class, 'show']);
Route::post('setcatimpotliberatoires', [CatImpotLiberatoiresController::class, 'store']);
Route::post('updatecatimpotliberatoires/{code}', [CatImpotLiberatoiresController::class, 'update']);
Route::delete('deletecatimpotliberatoires/{code}', [CatImpotLiberatoiresController::class, 'destroy']);
Route::post('importregions', [CatImpotLiberatoiresController::class, 'import']);

// CatImpotLiberatoires Routes
Route::get('getcatjuridiques', [CatJuridiquesController::class, 'index']);
Route::get('getordercatjuridiques', [CatJuridiquesController::class, 'order']);
Route::get('getcatjuridiques/{code}', [CatJuridiquesController::class, 'show']);
Route::post('setcatjuridiques', [CatJuridiquesController::class, 'store']);
Route::post('updatecatjuridiques/{code}', [CatJuridiquesController::class, 'update']);
Route::delete('deletecatjuridiques/{code}', [CatJuridiquesController::class, 'destroy']);
Route::post('importregions', [CatJuridiquesController::class, 'import']);

