<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RsController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\RegionsController;

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

