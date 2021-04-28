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


use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\VentilationsController;

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
Route::delete('deleteuser', [UserController::class, 'destroy']);

// Arrondissements Routes
Route::get('getarrondissements', [ArrondissementsController::class, 'index']);
Route::get('getorderarrondissements', [ArrondissementsController::class, 'order']);
Route::get('getarrondissement/{code}', [ArrondissementsController::class, 'show']);
Route::post('setarrondissement', [ArrondissementsController::class, 'store']);
Route::post('updatearrondissement/{code}', [ArrondissementsController::class, 'update']);
Route::delete('deletearrondissement/{code}', [ArrondissementsController::class, 'destroy']);

//Departements Routes
Route::get('getdepartements', [DepartementsController::class, 'index']);
Route::get('getorderdepartements', [DepartementsController::class, 'order']);
Route::get('getdepartement/{code}', [DepartementsController::class, 'show']);
Route::post('setdepartement', [DepartementsController::class, 'store']);
Route::post('updatedepartement/{code}', [DepartementsController::class, 'update']);
Route::delete('deletedepartement/{code}', [DepartementsController::class, 'destroy']);

// Regions Routes
Route::get('getregions', [RegionsController::class, 'index']);
Route::get('getorderregions', [RegionsController::class, 'order']);
Route::get('getregion/{code}', [RegionsController::class, 'show']);
Route::post('setregion', [RegionsController::class, 'store']);
Route::post('updateregion/{code}', [RegionsController::class, 'update']);
Route::delete('deleteregion/{code}', [RegionsController::class, 'destroy']);

// SystemeDsf Routes
Route::get('getsystemedsfs', [SystemeDsfsController::class, 'index']);
Route::get('getordersystemedsfs', [SystemeDsfsController::class, 'order']);
Route::get('getsystemedsf/{code}', [SystemeDsfsController::class, 'show']);
Route::post('setsystemedsf', [SystemeDsfsController::class, 'store']);
Route::post('updatesystemedsf/{code}', [SystemeDsfsController::class, 'update']);
Route::delete('deletesystemedsf/{code}', [SystemeDsfsController::class, 'destroy']);

// EtatActivites Routes
Route::get('getetatactivites', [EtatActivitesController::class, 'index']);
Route::get('getorderetatactivites', [EtatActivitesController::class, 'order']);
Route::get('getetatactivite/{code}', [EtatActivitesController::class, 'show']);
Route::post('setetatactivite', [EtatActivitesController::class, 'store']);
Route::post('updateetatactivite/{code}', [EtatActivitesController::class, 'update']);
Route::delete('deleteetatactivite/{code}', [EtatActivitesController::class, 'destroy']);

// NatureContratLocation Routes
Route::get('getnaturecontratlocations', [NatureContratLocationsController::class, 'index']);
Route::get('getordernaturecontratlocations', [NatureContratLocationsController::class, 'order']);
Route::get('getnaturecontratlocation/{code}', [NatureContratLocationsController::class, 'show']);
Route::post('setnaturecontratlocation', [NatureContratLocationsController::class, 'store']);
Route::post('updatenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'update']);
Route::delete('deletenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'destroy']);

// NatureCreation Routes
Route::get('getnaturecreations', [NatureCreationController::class, 'index']);
Route::get('getordernaturecreations', [NatureCreationController::class, 'order']);
Route::get('getnaturecreation/{code}', [NatureCreationController::class, 'show']);
Route::post('setnaturecreation', [NatureCreationController::class, 'store']);
Route::post('updatenaturecreation/{code}', [NatureCreationController::class, 'update']);
Route::delete('deletenaturecreation/{code}', [NatureCreationController::class, 'destroy']);

// RegimeImpots Routes
Route::get('getregimeimpots', [RegimeImpotsController::class, 'index']);
Route::get('getorderregimeimpots', [RegimeImpotsController::class, 'order']);
Route::get('getregimeimpot/{code}', [RegimeImpotsController::class, 'show']);
Route::post('setregimeimpot', [RegimeImpotsController::class, 'store']);
Route::post('updateregimeimpot/{code}', [RegimeImpotsController::class, 'update']);
Route::delete('deleteregimeimpot/{code}', [RegimeImpotsController::class, 'destroy']);

// StatutOccupationLocal Routes
Route::get('getstatusoccupationlocales', [StatusOccupationLocalsController::class, 'index']);
Route::get('getorderstatusoccupationlocales', [StatusOccupationLocalsController::class, 'order']);
Route::get('getstatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'show']);
Route::post('setstatusoccupationlocale', [StatusOccupationLocalsController::class, 'store']);
Route::post('updatestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'update']);
Route::delete('deletestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'destroy']);

// MotifArretActivites Routes
Route::get('getmotifarretactivites', [MotifArretActivitesController::class, 'index']);
Route::get('getordermotifarretactivites', [MotifArretActivitesController::class, 'order']);
Route::get('getmotifarretactivite/{code}', [MotifArretActivitesController::class, 'show']);
Route::post('setmotifarretactivite', [MotifArretActivitesController::class, 'store']);
Route::post('updatemotifarretactivite/{code}', [MotifArretActivitesController::class, 'update']);
Route::delete('deletemotifarretactivite/{code}', [MotifArretActivitesController::class, 'destroy']);

// Statut Routes
Route::get('getstatuss', [StatusController::class, 'index']);
Route::get('getorderstatuss', [StatusController::class, 'order']);
Route::get('getstatus/{code}', [StatusController::class, 'show']);
Route::post('setstatus', [StatusController::class, 'store']);
Route::post('updatestatus/{code}', [StatusController::class, 'update']);
Route::delete('deletestatus/{code}', [StatusController::class, 'destroy']);

// Entreprises Routes
Route::get('getentreprises', [EntreprisesController::class, 'index']);
Route::get('getorderentreprises', [EntreprisesController::class, 'order']);
Route::get('getentreprise/{id}', [EntreprisesController::class, 'show']);
Route::post('setentreprise', [EntreprisesController::class, 'store']);
Route::post('updateentreprise/{id}', [EntreprisesController::class, 'update']);
Route::delete('deleteentreprise/{id}', [EntreprisesController::class, 'del']);

// Ventilations Routes
Route::get('getventilations', [VentilationsController::class, 'index']);
Route::get('getventilation/{code}', [VentilationsController::class, 'show']);
Route::get('getorderventilations/{id}', [VentilationsController::class, 'list']);
Route::post('setventilation', [VentilationsController::class, 'store']);
Route::post('updateventilation/{code}', [VentilationsController::class, 'update']);
Route::delete('deleteventilation/{code}', [VentilationsController::class, 'destroy']);

// Produits Routes
Route::get('getproduits', [ProduitsController::class, 'index']);
Route::get('getproduit/{code}', [ProduitsController::class, 'show']);
Route::get('getorderproduits/{id}', [ProduitsController::class, 'list']);
Route::post('setproduit', [ProduitsController::class, 'store']);
Route::post('updateproduit/{code}', [ProduitsController::class, 'update']);
Route::delete('deleteproduit/{code}', [ProduitsController::class, 'destroy']);

