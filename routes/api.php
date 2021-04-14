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

Route::get('users', [UserController::class, 'index']);

// Arrondissements Routes
Route::get('getarrondissements', [ArrondissementsController::class, 'index']);
Route::get('getorderarrondissements', [ArrondissementsController::class, 'order']);
Route::get('getarrondissement/{code}', [ArrondissementsController::class, 'show']);
Route::post('setarrondissement', [ArrondissementsController::class, 'store']);
Route::post('updatearrondissement/{code}', [ArrondissementsController::class, 'update']);
Route::get('deletearrondissement/{code}', [ArrondissementsController::class, 'destroy']);

//Departements Routes
Route::get('getdepartements', [DepartementsController::class, 'index']);
Route::get('getorderdepartements', [DepartementsController::class, 'order']);
Route::get('getdepartement/{code}', [DepartementsController::class, 'show']);
Route::post('setdepartement', [DepartementsController::class, 'store']);
Route::post('updatedepartement/{code}', [DepartementsController::class, 'update']);
Route::get('deletedepartement/{code}', [DepartementsController::class, 'destroy']);

// Regions Routes
Route::get('getregions', [RegionsController::class, 'index']);
Route::get('getorderregions', [RegionsController::class, 'order']);
Route::get('getregion/{code}', [RegionsController::class, 'show']);
Route::post('setregion', [RegionsController::class, 'store']);
Route::post('updateregion/{code}', [RegionsController::class, 'update']);
Route::get('deleteregion/{code}', [RegionsController::class, 'destroy']);

// SystemeDsf Routes
Route::get('getsystemedsfs', [SystemeDsfsController::class, 'index']);
Route::get('getordersystemedsfs', [SystemeDsfsController::class, 'order']);
Route::get('getsystemedsf/{code}', [SystemeDsfsController::class, 'show']);
Route::post('setsystemedsf', [SystemeDsfsController::class, 'store']);
Route::post('updatesystemedsf/{code}', [SystemeDsfsController::class, 'update']);
Route::get('deletesystemedsf/{code}', [SystemeDsfsController::class, 'destroy']);

// EtatActivites Routes
Route::get('getetatactivites', [EtatActivitesController::class, 'index']);
Route::get('getorderetatactivites', [EtatActivitesController::class, 'order']);
Route::get('getetatactivite/{code}', [EtatActivitesController::class, 'show']);
Route::post('setetatactivite', [EtatActivitesController::class, 'store']);
Route::post('updateetatactivite/{code}', [EtatActivitesController::class, 'update']);
Route::get('deleteetatactivite/{code}', [EtatActivitesController::class, 'destroy']);

// NatureContratLocation Routes
Route::get('getnaturecontratlocations', [NatureContratLocationsController::class, 'index']);
Route::get('getordernaturecontratlocations', [NatureContratLocationsController::class, 'order']);
Route::get('getnaturecontratlocation/{code}', [NatureContratLocationsController::class, 'show']);
Route::post('setnaturecontratlocation', [NatureContratLocationsController::class, 'store']);
Route::post('updatenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'update']);
Route::get('deletenaturecontratlocation/{code}', [NatureContratLocationsController::class, 'destroy']);

// NatureCreation Routes
Route::get('getnaturecreations', [NatureCreationController::class, 'index']);
Route::get('getordernaturecreations', [NatureCreationController::class, 'order']);
Route::get('getnaturecreation/{code}', [NatureCreationController::class, 'show']);
Route::post('setnaturecreation', [NatureCreationController::class, 'store']);
Route::post('updatenaturecreation/{code}', [NatureCreationController::class, 'update']);
Route::get('deletenaturecreation/{code}', [NatureCreationController::class, 'destroy']);

// RegimeImpots Routes
Route::get('getregimeimpots', [RegimeImpotsController::class, 'index']);
Route::get('getorderregimeimpots', [RegimeImpotsController::class, 'order']);
Route::get('getregimeimpot/{code}', [RegimeImpotsController::class, 'show']);
Route::post('setregimeimpot', [RegimeImpotsController::class, 'store']);
Route::post('updateregimeimpot/{code}', [RegimeImpotsController::class, 'update']);
Route::get('deleteregimeimpot/{code}', [RegimeImpotsController::class, 'destroy']);

// StatutOccupationLocal Routes
Route::get('getstatusoccupationlocales', [StatusOccupationLocalsController::class, 'index']);
Route::get('getorderstatusoccupationlocales', [StatusOccupationLocalsController::class, 'order']);
Route::get('getstatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'show']);
Route::post('setstatusoccupationlocale', [StatusOccupationLocalsController::class, 'store']);
Route::post('updatestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'update']);
Route::get('deletestatusoccupationlocale/{code}', [StatusOccupationLocalsController::class, 'destroy']);

// MotifArretActivites Routes
Route::get('getarrondissements', [MotifArretActivitesController::class, 'index']);
Route::get('getorderarrondissements', [MotifArretActivitesController::class, 'order']);
Route::get('getarrondissement/{code}', [MotifArretActivitesController::class, 'show']);
Route::post('setarrondissement', [MotifArretActivitesController::class, 'store']);
Route::post('updatearrondissement/{code}', [MotifArretActivitesController::class, 'update']);
Route::get('deletearrondissement/{code}', [MotifArretActivitesController::class, 'destroy']);

// statut Routes
Route::get('getarrondissements', [StatusController::class, 'index']);
Route::get('getorderarrondissements', [StatusController::class, 'order']);
Route::get('getarrondissement/{code}', [StatusController::class, 'show']);
Route::post('setarrondissement', [StatusController::class, 'store']);
Route::post('updatearrondissement/{code}', [StatusController::class, 'update']);
Route::get('deletearrondissement/{code}', [StatusController::class, 'destroy']);

